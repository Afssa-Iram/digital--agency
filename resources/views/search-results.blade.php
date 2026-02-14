@extends('layouts.webtec')

@section('content')
<section class="search-results-section py-100">
    <div class="auto-container">
        <div class="sec-title-h2 text-center mb-50">
            <h6 class="sub-title">Search Results</h6>
            <h2 class="title">Results for: <span>{{ $query }}</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @if($services->isEmpty() && $portfolios->isEmpty())
                    <div class="text-center py-5">
                        <i class="fal fa-search mb-4" style="font-size: 64px; opacity: 0.2;"></i>
                        <h3>No results found for your search.</h3>
                        <p>Try different keywords or browse our services.</p>
                        <a href="{{ route('services') }}" class="theme-btn btn-style-one mt-4">
                            <span class="btn-title">Browse Services</span>
                        </a>
                    </div>
                @endif

                @if($services->isNotEmpty())
                    <div class="mb-50">
                        <h3 class="mb-4">Services ({{ $services->count() }})</h3>
                        <div class="row g-4">
                            @foreach($services as $service)
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-block-two p-4 border rounded shadow-sm hover-grow" style="transition: all 0.3s ease;">
                                        <h4 class="mb-3 text-primary">{{ $service->title }}</h4>
                                        <p>{{ Str::limit($service->description, 100) }}</p>
                                        <a href="{{ route('services') }}" class="read-more text-uppercase font-bold" style="font-size: 12px; letter-spacing: 1px;">Learn More <i class="far fa-chevron-right ms-1"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($portfolios->isNotEmpty())
                    <div>
                        <h3 class="mb-4">Portfolio ({{ $portfolios->count() }})</h3>
                        <div class="row g-4">
                            @foreach($portfolios as $portfolio)
                                <div class="col-lg-4 col-md-6">
                                    <div class="project-block-two p-0 overflow-hidden border rounded shadow-sm hover-grow" style="transition: all 0.3s ease;">
                                        <div class="image-box">
                                            @php
                                                $pImg = asset('images/page-title.jpg');
                                                if ($portfolio->image) {
                                                    $pImg = filter_var($portfolio->image, FILTER_VALIDATE_URL) ? $portfolio->image : asset('storage/' . $portfolio->image);
                                                }
                                            @endphp
                                            <img src="{{ $pImg }}" 
                                                 onerror="this.src='{{ asset('images/page-title.jpg') }}'"
                                                 alt="" class="w-100 h-200" style="object-fit: cover;">
                                        </div>
                                        <div class="p-4">
                                            <h4 class="mb-2">{{ $portfolio->title }}</h4>
                                            <span class="text-muted d-block mb-3">{{ $portfolio->category }}</span>
                                            <a href="{{ route('portfolio.show', $portfolio) }}" class="theme-btn btn-style-two btn-sm py-2">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<style>
.hover-grow:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
.h-200 { height: 200px; }
</style>
@endsection
