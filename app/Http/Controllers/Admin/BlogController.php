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
        $blogs = Blog::latest()->get();
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
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'category' => 'required|string',
            'subcategory' => 'required|string',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $imagePath = $request->file('blog_image')->store('blogs', 'public');

        Blog::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'category' => $request->category,
            'subcategory' => $request->subcategory,
            'image' => $imagePath,
            'content' => $request->content,
            'user_id' => auth()->id(),
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
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'category' => 'required|string',
            'subcategory' => 'required|string',
            'blog_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $imagePath = $blog->image;
        if ($request->hasFile('blog_image')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('blog_image')->store('blogs', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
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
}
