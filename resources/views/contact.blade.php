@extends('layouts.webtec')

@section('content')

{{-- HERO SECTION --}}
<div class="banner-section-h1" style="min-height: 40vh;">
    <div class="bg-image">
        <img src="{{ asset('images/page-title.jpg') }}" alt="Contact Us">
    </div>
    <div class="inner-content">
        <h1 class="banner-title">Get In <span>Touch</span></h1>
        <p class="text">Our channels are open for collaboration. Initiate a dialogue that leads to digital transformation.</p>
    </div>
</div>

<section class="contact-section py-100 bg-light">
    <div class="auto-container">
        <div class="row g-5">
            {{-- LEFT: CONTACT INFO --}}
            <div class="col-lg-5">
                <div class="contact-info-column pe-lg-4">
                    <div class="sec-title-h2">
                        <h6 class="sub-title">Connect With Us</h6>
                        <h2 class="title mb-30">Reach Out In Any Dimension</h2>
                    </div>
                    
                    <div class="info-blocks-wrapper mt-40">
                        <div class="info-block-item d-flex align-items-center mb-30 p-4 bg-white rounded shadow-sm hover-glow">
                            <div class="icon-box d-flex align-items-center justify-content-center bg-primary rounded-circle text-white me-4" style="width: 60px; height: 60px; min-width: 60px;">
                                <i class="fal fa-envelope" style="font-size: 24px;"></i>
                            </div>
                            <div class="text-box">
                                <h5 class="mb-1">Email Us</h5>
                                <a href="mailto:info@digiagency.com" class="text-muted text-decoration-none">info@digiagency.com</a>
                            </div>
                        </div>

                        <div class="info-block-item d-flex align-items-center mb-30 p-4 bg-white rounded shadow-sm hover-glow">
                            <div class="icon-box d-flex align-items-center justify-content-center bg-primary rounded-circle text-white me-4" style="width: 60px; height: 60px; min-width: 60px;">
                                <i class="fal fa-phone" style="font-size: 24px;"></i>
                            </div>
                            <div class="text-box">
                                <h5 class="mb-1">Call Us</h5>
                                <a href="tel:+923001234567" class="text-muted text-decoration-none">+92 300 1234567</a>
                            </div>
                        </div>

                        <div class="info-block-item d-flex align-items-center p-4 bg-white rounded shadow-sm hover-glow">
                            <div class="icon-box d-flex align-items-center justify-content-center bg-primary rounded-circle text-white me-4" style="width: 60px; height: 60px; min-width: 60px;">
                                <i class="fal fa-map-marker-alt" style="font-size: 24px;"></i>
                            </div>
                            <div class="text-box">
                                <h5 class="mb-1">Visit Us</h5>
                                <p class="text-muted m-0">123 Tech Square, Phase 3, Lahore</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-50">
                        <h4 class="mb-30">Our Global Footprint</h4>
                        <div class="p-4 rounded border dashed d-flex align-items-center justify-content-center bg-white" style="min-height: 200px; border-color: #ddd !important;">
                             <div class="text-center">
                                <i class="fal fa-globe-americas mb-3" style="font-size: 40px; color: #eee;"></i>
                                <p class="small text-muted">A dynamic gateway to Pakistani & Middle Eastern digital markets.</p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT: CONTACT FORM --}}
            <div class="col-lg-7">
                <div class="contact-form-wrapper p-5 bg-white rounded-3 shadow-premium">
                    <div class="form-header mb-40">
                        <h3 class="mb-2">Send an Instant Message</h3>
                        <p class="text-muted">Fields marked with <span class="text-danger">*</span> are mandatory.</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success d-flex align-items-center gap-3 p-3 mb-30 border-0 shadow-sm">
                            <i class="fas fa-check-circle" style="font-size: 24px;"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                    @endif

                    <form method="post" action="{{ route('contact.store') }}" class="contact-form-logic">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label small font-bold text-uppercase text-muted">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control premium-input" placeholder="e.g. Ali Ahmed" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label small font-bold text-uppercase text-muted">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control premium-input" placeholder="e.g. ali@example.com" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label small font-bold text-uppercase text-muted">Subject</label>
                                    <input type="text" name="subject" class="form-control premium-input" placeholder="e.g. Project Inquiry">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label small font-bold text-uppercase text-muted">Message Details <span class="text-danger">*</span></label>
                                    <textarea name="message" class="form-control premium-input" rows="6" placeholder="Describe your vision or inquiry..." required></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-40">
                                <button type="submit" class="theme-btn btn-style-one w-100 py-3 text-center border-0">
                                    <span class="btn-title py-2 h5 m-0 d-flex align-items-center justify-content-center">
                                        Launch Transmission <i class="fal fa-paper-plane ms-2"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.premium-input {
    background: #fdfdfd;
    border: 1px solid #eee;
    padding: 12px 18px;
    border-radius: 12px;
    transition: all 0.3s ease;
}
.premium-input:focus {
    background: #fff;
    border-color: var(--primary);
    box-shadow: 0 5px 15px rgba(255, 56, 56, 0.08);
}
.shadow-premium {
    box-shadow: 0 40px 100px rgba(0,0,0,0.08) !important;
}
</style>

@endsection
