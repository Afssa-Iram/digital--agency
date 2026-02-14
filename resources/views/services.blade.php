@extends('layouts.webtec')

@section('content')

{{-- HERO SECTION --}}
<div class="banner-section-h1" style="min-height: 40vh;">
    <div class="bg-image">
        <img src="{{ asset('images/service-h1-bg-1.jpg') }}" alt="Services">
    </div>
    <div class="inner-content">
        <h1 class="banner-title">Infinite <span>Services</span></h1>
        <p class="text">Our solutions exist across every digital dimension. Explore the mastery that transforms potential into kinetic growth.</p>
    </div>
</div>

{{-- SERVICES GRID --}}
<section class="section">
    <div class="container">
        <div class="row">
            @php
                $icons = ['cube', 'atom', 'dna', 'robot', 'brain', 'network-wired', 'microchip', 'project-diagram', 'rocket'];
                $iconIndex = 0;
            @endphp
            
            @forelse($services as $service)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-block-h1" style="height: 100%;">
                        <div class="inner-block" style="padding: 30px; height: 100%;">
                            <div style="width: 70px; height: 70px; border-radius: 15px; background: var(--primary); display: flex; align-items: center; justify-content: center; margin-bottom: 25px; color: white;">
                                <i class="fas fa-{{ $icons[$iconIndex % count($icons)] }}" style="font-size: 2rem;"></i>
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 15px; color: #333;">{{ $service->title }}</h3>
                            <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                                {{ $service->description }}
                            </p>
                            <div style="display: flex; align-items: center; gap: 10px; color: var(--primary); font-weight: 700;">
                                <i class="fas fa-check-circle"></i>
                                <span>Premium Solution</span>
                            </div>
                        </div>
                    </div>
                </div>
                @php $iconIndex++; @endphp
            @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-inbox" style="font-size: 4rem; color: #ddd; margin-bottom: 20px;"></i>
                    <h3>No Channels Active</h3>
                    <p style="color: #999;">We are currently recalibrating our service spectrum.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="section pt-0">
    <div class="container">
        <div class="inner-block" style="text-align: center; background: url('{{ asset('images/cta-h3-1.jpg') }}') center/cover; padding: 100px 20px; border-radius: 30px; position: relative; overflow: hidden;">
            <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.6); z-index: 1;"></div>
            <div style="position: relative; z-index: 2; color: white;">
                <h2 style="font-weight: 900; margin-bottom: 20px; color: white;">Seek a Bespoke Dimension?</h2>
                <p style="color: #ccc; font-size: 1.125rem; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Uniqueness is our standard. Let's engineer a custom trajectory for your specific business goals.
                </p>
                <a href="{{ route('contact') }}" class="theme-btn btn-style-one">
                    <i class="fas fa-comments"></i> Initiate Dialogue
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
