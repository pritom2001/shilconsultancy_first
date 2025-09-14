<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Schema;

class PublicBlogController extends Controller
{
    public function index()
    {
        $categories = Blog::distinct()->pluck('category');
        $blogs = Blog::latest()->paginate(12);

        return view('public_blogs', compact('blogs', 'categories'));
    }

    public function category($slug)
    {
        $categoryName = str_replace('-', ' ', $slug);
        $categories = Blog::distinct()->pluck('category');
        $blogs = Blog::where('category', $categoryName)->latest()->paginate(12);

        return view('public_blogs', compact('blogs', 'categories', 'categoryName'));
    }

    public function show(Blog $blog)
    {
        $blog->load('comments');
        
        $latestPosts = Blog::latest()->take(5)->get();
        
        // Get categories with counts for sidebar
        $categories = Blog::groupBy('category')
            ->selectRaw('category, COUNT(*) as count')
            ->get();
        
        $featuredPost = Blog::when(Schema::hasColumn('blogs', 'is_featured'), function($query) {
            $query->where('is_featured', true);
        })
        ->when(Schema::hasColumn('blogs', 'views'), function($query) {
            $query->orderBy('views', 'desc');
        })
        ->orderBy('created_at', 'desc')
        ->first();
        
        $relatedPosts = Blog::where('category', $blog->category)
            ->where('id', '!=', $blog->id)
            ->take(2)
            ->get();
            
        $previousPost = Blog::where('created_at', '<', $blog->created_at)
            ->orderBy('created_at', 'desc')
            ->first();
            
        $nextPost = Blog::where('created_at', '>', $blog->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        if (Schema::hasColumn('blogs', 'views')) {
            $blog->increment('views');
        }

        return view('article', compact(
            'blog', 'latestPosts', 'categories', 'featuredPost', 
            'relatedPosts', 'previousPost', 'nextPost'
        ));
    }
    
    public function storeComment(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'comment' => 'required|string|min:5'
        ]);
        
        Comment::create([
            'blog_id' => $blog->id,
            ...$validated
        ]);
        
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}