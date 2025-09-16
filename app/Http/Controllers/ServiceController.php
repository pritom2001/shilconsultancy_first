<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function webDevelopment()
    {
        return view('services.web-development-services');
    }

    public function ecommerceDevelopment()
    {
        return view('services.ecommerce-development');
    }

    public function socialMediaMarketing()
    {
        return view('services.social-media-marketing');
    }

    public function contentCreation()
    {
        return view('services.content-creation');
    }

    public function brandStrategy()
    {
        return view('services.brand-strategy');
    }

    public function seoAnalysis()
    {
        return view('services.search-engine-optimisation');
    }
}
