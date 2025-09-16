<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, $slug)
    {
        // Find the blog post by its slug
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);
        
        // Add the blog_id to the validated data before creating the comment
        $validatedData['blog_id'] = $blog->id;

        // Use mass assignment to create the new comment
        Comment::create($validatedData);

        // Redirect back to the article page with a success message
        return redirect()->route('public.blogs.show', ['blog' => $blog->slug])->with('success', 'Comment added successfully!');
    }
}
