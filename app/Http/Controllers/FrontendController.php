<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home', [
            'banners' => Banner::where('is_active', true)->orderBy('order_index')->get(),
            'services' => Service::where('is_active', true)->latest()->take(6)->get(),
            'portfolios' => Portfolio::where('is_featured', true)->latest()->take(6)->get(),
            'testimonials' => Testimonial::where('is_active', true)->latest()->get(),
        ]);
    }

    public function services()
    {
        return view('services', [
            'services' => Service::where('is_active', true)->get(),
        ]);
    }

    public function portfolio()
    {
        return view('portfolio', [
            'portfolios' => Portfolio::where('is_featured', true)->get(),
        ]);
    }

    public function portfolioShow(Portfolio $portfolio)
    {
        return view('portfolio-show', compact('portfolio'));
    }
}
