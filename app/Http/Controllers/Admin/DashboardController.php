<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Banner;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'services' => Service::count(),
            'portfolios' => Portfolio::count(),
            'testimonials' => Testimonial::count(),
            'contacts' => Contact::count(),
            'banners' => Banner::count(),
        ]);
    }
}

