<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $banners = Banner::where('is_active', true)->orderBy('order_index')->get();
        $services = Service::where('is_active', true)->take(6)->get();
        $portfolios = Portfolio::where('is_featured', true)->take(6)->get();
        $testimonials = Testimonial::latest()->take(5)->get();

        return view('home', compact('banners', 'services', 'portfolios', 'testimonials'));
    }
}