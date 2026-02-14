@extends('layouts.webtec')

@section('content')

{{-- HERO SECTION --}}
<div class="banner-section-h1" style="min-height: 40vh;">
    <div class="bg-image">
        <img src="{{ asset('images/page-title.jpg') }}" alt="Portfolio">
    </div>
    <div class="inner-content">
        <h1 class="banner-title">Our <span>Portfolio</span></h1>
        <p class="text">Our work exists as tangible evidence of digital evolution. Witness the projects that redefined their specific niches.</p>
    </div>
</div>

{{-- PORTFOLIO GRID --}}
<section class="section">
    <div class="container">
        <div class="row">
            @php
                $portfolioFallbacks = [
                    'images/whu-h3-1.jpg',
                    'images/cta-h3-1.jpg',
                    'images/page-title.jpg',
                    'images/contact-bg-2.jpg',
                    'images/team-h1-1.jpg',
                    'images/service-h1-bg-1.jpg'
                ];
            @endphp
            @forelse($portfolios as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-block-h1" style="height: 100%;">
                        <div class="inner-block" style="height: 100%;">
                            <div class="image">
                                <a href="{{ route('portfolio.show', $item->id) }}">
                                    @php
                                        $imageSrc = asset($portfolioFallbacks[$loop->index % count($portfolioFallbacks)]);
                                        if ($item->image) {
                                            if (filter_var($item->image, FILTER_VALIDATE_URL)) {
                                                $imageSrc = $item->image;
                                            } elseif (file_exists(public_path('storage/' . $item->image)) && is_file(public_path('storage/' . $item->image))) {
                                                $imageSrc = asset('storage/' . $item->image);
                                            }
                                        }
                                    @endphp
                                    <img src="{{ $imageSrc }}" 
                                         alt="{{ $item->title }}"
                                         style="height: 250px; width: 100%; object-fit: cover;">
                                </a>
                            </div>
                            <div class="content-box">
                                <div class="inner-box">
                                    <div class="content">
                                        <div class="sub-title" style="color: var(--primary); font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">{{ $item->category }}</div>
                                        <h4 class="title" style="font-size: 1.4rem; margin: 10px 0;"><a href="{{ route('portfolio.show', $item->id) }}" style="color: #333; text-decoration: none;">{{ $item->title }}</a></h4>
                                        <p style="font-size: 0.9rem; color: #777;">Client: {{ $item->client }}</p>
                                    </div>
                                    <a href="{{ route('portfolio.show', $item->id) }}" class="icon" style="color: var(--primary);"><i class="fa-light fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-images" style="font-size: 4rem; color: #ddd; margin-bottom: 20px;"></i>
                    <h3>No Entities Detected</h3>
                    <p style="color: #999;">We are working on projects that will soon materialize.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection
