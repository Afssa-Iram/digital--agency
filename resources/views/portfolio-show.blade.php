@extends('layouts.webtec')

@section('content')

{{-- HERO SECTION --}}
<div class="banner-section-h1" style="min-height: 40vh;">
    <div class="bg-image">
        <img src="{{ asset('images/page-title.jpg') }}" alt="{{ $portfolio->title }}">
    </div>
    <div class="inner-content">
        <h1 class="banner-title">{{ $portfolio->title }}</h1>
        <p class="text">{{ $portfolio->category }}</p>
    </div>
</div>

<section class="portfolio-details py-100">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="image-box mb-40">
                    @php
                        $showImage = false;
                        $finalImage = '';
                        if ($portfolio->image) {
                            $showImage = true;
                            if (filter_var($portfolio->image, FILTER_VALIDATE_URL)) {
                                $finalImage = $portfolio->image;
                            } else {
                                $finalImage = asset('storage/' . $portfolio->image);
                            }
                        }
                    @endphp
                    @if($showImage)
                        <img src="{{ $finalImage }}" 
                             onerror="this.parentElement.innerHTML='<div class=\"bg-light d-flex align-items-center justify-content-center border rounded\" style=\"height: 400px;\"><i class=\"fal fa-image\" style=\"font-size: 80px; opacity: 0.1;\"></i></div>'"
                             alt="{{ $portfolio->title }}" class="w-100 rounded shadow">
                    @else
                        <div class="bg-light d-flex align-items-center justify-content-center border rounded" style="height: 400px;">
                            <i class="fal fa-image" style="font-size: 80px; opacity: 0.1;"></i>
                        </div>
                    @endif
                </div>
                
                <div class="content-box">
                    <h2 class="mb-30">Strategic Vision</h2>
                    <div class="text mb-40" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        {!! nl2br(e($portfolio->description)) !!}
                    </div>

                    @if($portfolio->content)
                        <div class="mission-box p-4 bg-light border-start border-4 border-primary rounded mb-40">
                            <h4 class="mb-2 text-primary">Core Mission</h4>
                            <p class="fst-italic m-0">{{ $portfolio->content }}</p>
                        </div>
                    @endif

                    <h3 class="mb-30">Key Highlights</h3>
                    <div class="row g-4">
                        <div class="col-md-6 text-center text-md-start">
                            <div class="p-4 border rounded bg-white shadow-sm">
                                <i class="fas fa-check-circle text-success mb-2" style="font-size: 24px;"></i>
                                <h5>ROI Focused</h5>
                                <p class="small m-0">Designed to maximize return on investment through data-driven decisions.</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-start">
                            <div class="p-4 border rounded bg-white shadow-sm">
                                <i class="fas fa-check-circle text-primary mb-2" style="font-size: 24px;"></i>
                                <h5>Multidimensional</h5>
                                <p class="small m-0">Integrated approach covering SEO, Social, and Performance marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <aside class="sidebar p-4 bg-white shadow rounded sticky-top" style="top: 100px; z-index: 10;">
                    <h3 class="border-bottom pb-2 mb-4">Project Info</h3>
                    
                    <div class="info-item mb-4">
                        <span class="d-block text-uppercase small font-bold text-muted mb-1">Status</span>
                        <span class="text-success font-bold d-flex align-items-center gap-2">
                            <i class="fas fa-lock-open"></i> FULL ACCESS GRANTED
                        </span>
                    </div>

                    <div class="info-item mb-4">
                        <span class="d-block text-uppercase small font-bold text-muted mb-1">Client</span>
                        <span class="h5 m-0 text-primary font-bold">{{ $portfolio->client }}</span>
                    </div>

                    <div class="info-item mb-4">
                        <span class="d-block text-uppercase small font-bold text-muted mb-1">Deployment</span>
                        <span class="h6 m-0">{{ $portfolio->created_at->format('M Y') }}</span>
                    </div>

                    <div class="info-item mb-5">
                        <span class="d-block text-uppercase small font-bold text-muted mb-1">Project Tags</span>
                        <div class="d-flex flex-wrap gap-2 pt-1">
                            <span class="badge bg-primary bg-opacity-10 text-primary">Premium</span>
                            <span class="badge bg-info bg-opacity-10 text-info">Strategic</span>
                            <span class="badge bg-warning bg-opacity-10 text-dark">ROI Focus</span>
                        </div>
                    </div>

                    @if($portfolio->link)
                        <a href="{{ $portfolio->link }}" target="_blank" class="theme-btn btn-style-one w-100 text-center py-3">
                            <span class="btn-title">View Live <i class="fas fa-external-link-alt ms-2"></i></span>
                        </a>
                    @else
                        <a href="{{ route('contact') }}" class="theme-btn btn-style-one w-100 text-center py-3">
                            <span class="btn-title">Contact Us <i class="fas fa-paper-plane ms-2"></i></span>
                        </a>
                    @endif
                </aside>
            </div>
        </div>
    </div>
</section>

@endsection
