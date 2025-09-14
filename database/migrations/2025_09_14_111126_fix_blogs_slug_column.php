<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; // Add this import

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First, let's add a temporary slug column
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('temp_slug')->nullable()->after('subtitle');
        });
        
        // Copy data from slug to temp_slug and generate slugs for null values
        DB::table('blogs')->get()->each(function ($blog) {
            $slug = $blog->slug;
            if (empty($slug)) {
                $slug = Str::slug($blog->title);
                $count = 1;
                while (DB::table('blogs')->where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                    $slug = Str::slug($blog->title) . '-' . $count;
                    $count++;
                }
            }
            
            DB::table('blogs')
                ->where('id', $blog->id)
                ->update(['temp_slug' => $slug]);
        });
        
        // Drop the original slug column
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        
        // Rename temp_slug to slug and make it unique
        Schema::table('blogs', function (Blueprint $table) {
            $table->renameColumn('temp_slug', 'slug');
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverse the process if needed
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->renameColumn('slug', 'temp_slug');
        });
        
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->unique()->after('subtitle');
        });
        
        // Copy data back
        DB::table('blogs')->get()->each(function ($blog) {
            DB::table('blogs')
                ->where('id', $blog->id)
                ->update(['slug' => $blog->temp_slug]);
        });
        
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('temp_slug');
        });
    }
};