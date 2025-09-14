<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display the main About Us page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // This will return the view at resources/views/aboutUs/index.blade.php
        return view('aboutUs.index');
    }

    /**
     * Display the team members page.
     *
     * @return \Illuminate\View\View
     */
    public function teamMember()
    {
        // This will return the view at resources/views/aboutUs/team-member.blade.php
        return view('aboutUs.team-member');
    }
}