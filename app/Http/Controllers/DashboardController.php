<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Add this line to import the Blog model

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all blogs and count their comments
        $blogs = Blog::withCount('comments')->get();

        // Pass the $blogs collection to the dashboard view
        return view('dashboard.admin_dashboard', compact('blogs'));
    }
}