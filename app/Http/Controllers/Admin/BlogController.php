<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Use withCount to efficiently get the number of comments for each blog
        $blogs = Blog::withCount('comments')->latest()->get();
        $categories = [
            'Digital Marketing' => ['Social Media Marketing', 'SEO', 'Content Creation'],
            'Web Development' => ['Full-Stack', 'Frontend', 'Backend', 'Mobile App'],
            'Branding' => ['Brand Strategy', 'Visual Identity']
        ];
        return view('dashboard.blogs.index', compact('blogs', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = [
            'Digital Marketing' => ['Social Media Marketing', 'SEO', 'Content Creation'],
            'Web Development' => ['Full-Stack', 'Frontend', 'Backend', 'Mobile App'],
            'Branding' => ['Brand Strategy', 'Visual Identity']
        ];
        return view('dashboard.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $slug = Str::slug($request->title);
        $count = 1;
        $originalSlug = $slug;

        // Ensure the slug is unique
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => $slug,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard.blogs.index')->with('success', 'Blog post created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\View\View
     */
    public function edit(Blog $blog)
    {
        $categories = [
            'Digital Marketing' => ['Social Media Marketing', 'SEO', 'Content Creation'],
            'Web Development' => ['Full-Stack', 'Frontend', 'Backend', 'Mobile App'],
            'Branding' => ['Brand Strategy', 'Visual Identity']
        ];
        return view('dashboard.blogs.blog_edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'subcategory' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        $slug = Str::slug($request->title);
        $count = 1;
        $originalSlug = $slug;

        // Ensure the new slug is unique and doesn't conflict with other blogs
        while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $blog->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'slug' => $slug,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard.blogs.index')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('dashboard.blogs.index')->with('success', 'Blog post deleted successfully!');
    }

    /**
     * Generate slugs for existing blogs (one-time use)
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function generateSlugs()
    {
        $blogs = Blog::whereNull('slug')->orWhere('slug', '')->get();

        foreach ($blogs as $blog) {
            $slug = Str::slug($blog->title);
            $count = 1;
            $originalSlug = $slug;

            while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $blog->update(['slug' => $slug]);
        }

        return redirect()->route('dashboard.blogs.index')->with('success', 'Slugs generated successfully!');
    }
    /**
     * Handle image upload from CKEditor
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            // Store the file in the public storage
            $request->file('upload')->storeAs('public/media', $fileName);

            $url = asset('storage/media/' . $fileName);

            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url' => $url
            ]);
        }

        return response()->json(['uploaded' => 0, 'error' => ['message' => 'File not uploaded']]);
    }
}
