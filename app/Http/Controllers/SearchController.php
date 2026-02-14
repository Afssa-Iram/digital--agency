<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        
        if (!$query) {
            return redirect()->back();
        }

        $services = Service::where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->where('is_active', true)
            ->get();

        $portfolios = Portfolio::where('title', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return view('search-results', compact('services', 'portfolios', 'query'));
    }
}
