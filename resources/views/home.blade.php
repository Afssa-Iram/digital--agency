@extends('layouts.webtec')

@section('content')
@php
    $serviceFallbacks = [
        'images/resource/services-h2-1.jpg',
        'images/resource/services-h2-2.jpg',
        'images/resource/services-h2-3.jpg',
    ];
    $portfolioFallbacks = [
        'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1200&auto=format&fit=crop', // Fintech
        'https://images.unsplash.com/photo-1523381210434-271e8be1f52b?q=80&w=1200&auto=format&fit=crop', // Ecommerce
        'https://images.unsplash.com/photo-1586717791821-3f44a563eb4c?q=80&w=1200&auto=format&fit=crop', // Branding
        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop', // Dashboard
        'https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=1200&auto=format&fit=crop', // AI/Tech
        'https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=1200&auto=format&fit=crop', // Creative Workspace
    ];
@endphp

    <!-- hero-area-start -->
    <section class="banner-section-h2">
      {{-- Background Image for Banner --}}
      <div class="bg-image" style="position: absolute; left: 0; top: 0; width: 100%; height: 100%; z-index: -1; opacity: 0.15;">
        <img src="{{ asset('images/cta-h3-1.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
      </div>

      <div class="shape-1">
        <img data-speed="1.2" src="{{ asset('images/icons/home2-shape2.png') }}" alt="img">
      </div>
      <div class="shape-2">
        <img data-speed="1.2" src="{{ asset('images/icons/home2-shape3.png') }}" alt="img">
      </div>
      <div class="outer-container">
        <div class="container">
            @forelse($banners as $banner)
            <div class="row align-items-center g-4 {{ !$loop->first ? 'd-none' : '' }}">
              <div class="col-xl-6 col-lg-7 mx-auto mx-xl-0">
                <div class="hero-content text-center text-xl-start">
                  <h6 class="sub-title">{{ $banner->subtitle }}</h6>
                  <h2 class="title wow fadeInUp" data-wow-delay="200ms">{!! $banner->title !!}</h2>
                  <div class="text mx-auto mx-xl-0 wow fadeInUp" data-wow-delay="400ms">{{ $banner->description }}</div>
                  <div class="d-sm-flex align-items-center justify-content-center justify-content-xl-start wow fadeInUp" data-wow-delay="600ms">
                    <div class="hero-button d-sm-flex">
                      <a href="{{ $banner->link ?? route('services') }}" class="theme-btn btn-style-one">
                        <span class="btn-arrow-left">
                          <i class="far fa-chevron-right"></i>
                        </span>
                        <span class="btn-title"> {{ $banner->button_text ?? 'Read More' }}</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="hero-img-box d-flex wow fadeInUp justify-content-center justify-content-xl-start" data-wow-delay="400ms">
                  <div class="img-1"><img class="image" src="{{ filter_var($banner->image, FILTER_VALIDATE_URL) ? $banner->image : asset('storage/' . $banner->image) }}" onerror="this.src='{{ asset('images/banner/home2-banner-1.jpg') }}'" alt=""></div>
                  <div class="ms-5">
                    <div class="img-2 mb-20"><img src="{{ asset('images/banner/home2-banner-2.jpg') }}" alt=""></div>
                    <div class="img-3"><img src="{{ asset('images/banner/home2-banner-3.jpg') }}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
            @empty
              {{-- Fallback Banner --}}
              <div class="row align-items-center g-4">
                <div class="col-xl-6 col-lg-7 mx-auto mx-xl-0">
                  <div class="hero-content text-center text-xl-start">
                    <h6 class="sub-title">SOLUTIONS FOR Creative Products</h6>
                    <h2 class="title wow fadeInUp" data-wow-delay="200ms">Where <span>Quality Meets</span> Creativity</h2>
                    <div class="text mx-auto mx-xl-0 wow fadeInUp" data-wow-delay="400ms">Highlights the partnership between the client’s vision and the agency’s technical and creative skills.</div>
                    <div class="d-sm-flex align-items-center justify-content-center justify-content-xl-start wow fadeInUp" data-wow-delay="600ms">
                      <div class="hero-button d-sm-flex">
                        <a href="{{ route('services') }}" class="theme-btn btn-style-one">
                          <span class="btn-arrow-left">
                            <i class="far fa-chevron-right"></i>
                          </span>
                          <span class="btn-title"> Read More</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="hero-img-box d-flex wow fadeInUp justify-content-center justify-content-xl-start" data-wow-delay="400ms">
                    <div class="img-1"><img class="image" src="{{ asset('images/banner/home2-banner-1.jpg') }}" alt=""></div>
                    <div class="ms-5">
                      <div class="img-2 mb-20"><img src="{{ asset('images/banner/home2-banner-2.jpg') }}" alt=""></div>
                      <div class="img-3"><img src="{{ asset('images/banner/home2-banner-3.jpg') }}" alt=""></div>
                    </div>
                  </div>
                </div>
              </div>
            @endforelse
        </div>
      </div>
    </section>
    <!-- hero-area-end -->

    <!-- About Section -->
    <section class="about-section-h2">
      <div class="auto-container">
        <div class="row">
          <!-- Content Column -->
          <div class="content-column col-xl-6 col-lg-8 order-xl-2 wow fadeInRight">
            <div class="inner-column">
              <div class="sec-title-h2">
                <h6 class="sub-title">KNOW ABOUT US </h6>
                <h2 class="title char-animation">Designing The Web With <br>Care And Quality</h2>
                <div class="text">We provide a diverse array of systems, each tailored to streamline your operations and enhance productivity.</div>
              </div>
              <div class="icon-outer-box row">
                <div class="icon-box col-lg-6 col-md-6 col-sm-6">
                  <div class="inner-box">
                    <div class="count-box">
                      <h2 class="count-text" data-speed="3000" data-stop="90">0</h2><span>%</span>
                    </div>
                    <h4 class="title">Business Consulting</h4>
                    <div class="descrip">Strategy consultants work closely with organizations to define</div>
                  </div>
                </div>
                <div class="icon-box col-lg-6 col-md-6 col-sm-6">
                  <div class="inner-box">
                    <div class="count-box">
                      <h2 class="count-text" data-speed="3000" data-stop="85">0</h2><span>%</span>
                    </div>
                    <h4 class="title">Financial Planning</h4>
                    <div class="descrip">Strategy consultants work closely with organizations to define</div>
                  </div>
                </div>
              </div>

              <div class="btn-box">
                <a href="{{ route('services') }}" class="theme-btn btn-style-one">
                  <span class="btn-arrow-left">
                    <i class="far fa-chevron-right"></i>
                  </span>
                  <span class="btn-title"> Read More</span>
                </a>
              </div>
            </div>
          </div>
          <!-- Image Column -->
          <div class="image-column col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="400ms">
              <div class="inner-column">
                <div class="shape-1"><img src="{{ asset('images/icons/about-h2-5.png') }}" alt=""></div>
                  <div class="image-box">
                      <div class="icon-1 bounce-y"><img src="{{ asset('images/icons/about-h2-3.png') }}" alt=""></div>
                      <figure class="image"><img src="{{ asset('images/resource/about-h2-1.jpg') }}" alt="Image"></figure>
                      <figure class="image2"><img src="{{ asset('images/resource/about-h2-2.jpg') }}" alt="Image"></figure>
                      <div class="icon"><img src="{{ asset('images/icons/about-h2-1.png') }}" alt=""></div>
                      <div class="shape-1 bounce-y"><img src="{{ asset('images/icons/about-h2-2.png') }}" alt=""></div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- start marquee-section -->
    <section class="marquee-section pb-0">
      <div class="marquee marquee-style-one">
        <div class="marquee-group">
          <div class="text text-style2" data-text="Digital"> Digital </div>
          <span class="text divider "> <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none"><path d="M49.1657 1.18531C49.3534 -0.395103 51.6466 -0.395103 51.8343 1.18531L53.4075 14.4435C55.4388 31.5634 68.9366 45.0612 86.0563 47.0925L99.3146 48.6657C100.895 48.8534 100.895 51.1466 99.3146 51.3343L86.0563 52.9075C68.9366 54.9388 55.4388 68.4366 53.4075 85.5563L51.8343 98.8146C51.6466 100.395 49.3534 100.395 49.1657 98.8146L47.5925 85.5563C45.5612 68.4366 32.0634 54.9388 14.9435 52.9075L1.68531 51.3343C0.104897 51.1466 0.104897 48.8534 1.68531 48.6657L14.9435 47.0925C32.0634 45.0612 45.5612 31.5634 47.5925 14.4435L49.1657 1.18531Z" fill="#FF3838"></path></svg> </span>
          <div class="text" data-text="Web Agency">Web Agency</div>
          <span class="text divider "> <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none"><path d="M49.1657 1.18531C49.3534 -0.395103 51.6466 -0.395103 51.8343 1.18531L53.4075 14.4435C55.4388 31.5634 68.9366 45.0612 86.0563 47.0925L99.3146 48.6657C100.895 48.8534 100.895 51.1466 99.3146 51.3343L86.0563 52.9075C68.9366 54.9388 55.4388 68.4366 53.4075 85.5563L51.8343 98.8146C51.6466 100.395 49.3534 100.395 49.1657 98.8146L47.5925 85.5563C45.5612 68.4366 32.0634 54.9388 14.9435 52.9075L1.68531 51.3343C0.104897 51.1466 0.104897 48.8534 1.68531 48.6657L14.9435 47.0925C32.0634 45.0612 45.5612 31.5634 47.5925 14.4435L49.1657 1.18531Z" fill="#FF3838"></path></svg> </span>
          <div class="text text-style2" data-text="Marketing">Marketing </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services-section-two home2-style">
      <div class="outer-box">
        <div class="auto-container">
          <div class="sec-title-h2 anim-text-flip-move">
            <div class="row">
              <div class="col-lg-7">
                <h6 class="sub-title wow fadeInUp">Our services</h6>
                <h2 class="title mb-lg-0 wow fadeInUp">Empower your business with innovative <span>digital services</span></h2>
              </div>
              <div class="col-lg-5">
                <div class="text">Tailored solutions for businesses of all sizes, from startups to large enterprises, across various industries.</div>
              </div>
            </div>
          </div>
          
          @foreach($services as $service)
          <!-- Service Block -->
          <div class="service-block-two home2-style anim-fade-move" data-delay="{{ 0.1 * $loop->iteration }}">
            <div class="inner-box {{ $loop->first ? 'active' : '' }}">
              <div class="title-box">
                <div class="number">{<span>{{ sprintf('%02d', $loop->iteration) }}</span>}</div>
                <div class="title">{{ $service->title }}</div>
                <div class="icon-box"><img src="{{ asset('images/icons/wcu-h1-' . (($loop->index % 3) + 1) . '.png') }}" alt=""></div>
              </div>
              <div class="content-box {{ $loop->first ? 'active' : '' }}">
                <div class="row">
                  <div class="image-column col-lg-6">
                    <div class="inner-column">
                      <figure class="image">
                        @php
                            $sImg = asset($serviceFallbacks[$loop->index % count($serviceFallbacks)]);
                            if ($service->icon) {
                                if (filter_var($service->icon, FILTER_VALIDATE_URL)) {
                                    $sImg = $service->icon;
                                } elseif (file_exists(public_path('storage/' . $service->icon)) && !is_dir(public_path('storage/' . $service->icon))) {
                                    $sImg = asset('storage/' . $service->icon);
                                }
                            }
                        @endphp
                        <img src="{{ $sImg }}" alt="{{ $service->title }}">
                      </figure>
                      <div class="icon-box">
                        <a href="{{ route('services') }}">
                          <span class="inner">
                            <i class="icon lnr-icon-arrow-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="content-column col-lg-6 col-xxl-5 offset-xxl-1">
                    <div class="inner-column">
                      <div class="text">{{ $service->description }}</div>
                      <div class="info-list">
                        <div class="list-item"><span>Digital Solution</span> ROI-Driven</div>
                        <div class="list-item"><span>Strategy</span> Implementation</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--End Services Section -->

    <!-- funfact-area-start -->
    <div class="ks-funfact-area ks-funfact-mlr home2-style">
      <div class="bg-image"><img src="{{ asset('images/resource/funfact-h2-1.jpg') }}" alt=""></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="sec-title-h2">
              <h6 class="sub-title">numbers don’t lie</h6>
              <h2 class="title char-animation">They Reveal The True <br>Power of a Company</h2>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="ks-funfact-wrap">
              <div class="ks_fade_anim" data-delay=".3" data-ease="bounce" data-fade-from="top" data-duration="1">
                <div class="ks-funfact-item d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                    <h5 class="ks-funfact-number"><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="230">0</i>k</h5>
                  </div>
                  <span>Completed Project</span>
                </div>
              </div>
              <div class="ks_fade_anim" data-delay=".5" data-ease="bounce" data-fade-from="top" data-duration="1">
                <div class="ks-funfact-item d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center">
                    <h5 class="ks-funfact-number"><i class="purecounter" data-purecounter-duration="1" data-purecounter-end="100">0</i>%</h5>
                  </div>
                  <span>satisfied customer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- funfact-area-end -->

    <!-- project section h2 -->
    <section class="project-section-h2">
      <div class="auto-container">
        <div class="sec-title-h2">
          <div class="left-box">
            <h6 class="sub-title">Selected works</h6>
            <h2 class="title">Showcasing Your Projects</h2>
          </div>
          <div class="right-box">
            <a href="{{ route('portfolio') }}" class="theme-btn btn-style-one">
              <span class="btn-arrow-left">
                <i class="far fa-chevron-right"></i>
              </span>
              <span class="btn-title"> See More Projects</span>
            </a>
          </div>
        </div>
        <div class="project-h2_inner-container">
          @foreach($portfolios as $portfolio)
          <div class="project-block">
            <div class="inner-block">
              <div class="row g-0">
                <div class="content-box col-lg-4">
                  <div class="inner-box">
                    <div class="content">
                      <h4 class="title"><a href="{{ route('portfolio.show', $portfolio) }}">{{ $portfolio->title }}</a></h4>
                      <div class="catagories">{{ $portfolio->category }}</div>
                    </div>
                    <a href="{{ route('portfolio.show', $portfolio) }}" class="theme-btn btn-style-two w-auto">
                      <span class="btn-arrow-left">
                        <i class="far fa-chevron-right"></i>
                      </span>
                      <span class="btn-title"> Read More</span>
                    </a>
                  </div>
                </div>
                <div class="image-box col-lg-8">
                  <div class="image">
                    @php
                        $pImg = asset($portfolioFallbacks[$loop->index % count($portfolioFallbacks)]);
                        if ($portfolio->image) {
                            if (filter_var($portfolio->image, FILTER_VALIDATE_URL)) {
                                $pImg = $portfolio->image;
                            } elseif (file_exists(public_path('storage/' . $portfolio->image)) && !is_dir(public_path('storage/' . $portfolio->image))) {
                                $pImg = asset('storage/' . $portfolio->image);
                            }
                        }
                    @endphp
                    <img src="{{ $pImg }}" alt="{{ $portfolio->title }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- end project section h2 -->

    <!-- choose-area-start -->
    <section class="ks-choose-2-area home2-style">
      <div class="outer-box">
        <div class="auto-container">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-8">
              <div class="ks-choose-2-content">
                <div class="sec-title-h1 white">
                  <h6 class="sub-title">why choose us</h6>
                  <h2 class="title char-animation">Why You Should Choose Us?</h2>
                </div>
                <div class="ks_fade_anim" data-delay=".3">
                  <p>We provide award-winning digital solutions with a focus on ROI and innovation.</p>
                </div>
                <div class="ks_fade_anim" data-delay=".7">
                  <a href="{{ route('contact') }}" class="theme-btn btn-style-one">
                    <span class="btn-arrow-left">
                      <i class="far fa-chevron-right"></i>
                    </span>
                    <span class="btn-title"> Get In Touch</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-8">
              <div class="ks-choose-2-thumb-wrap p-relative ks_fade_anim">
                <div class="row gx-0">
                  <div class="col-lg-12">
                     <div class="ks-choose-2-thumb"> <img src="{{ asset('images/resource/whu-h2-2.jpg') }}" alt=""> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq Section -->
    <section class="faq-section">
      <div class="auto-container">
        <div class="row">         
          <div class="content-column col-xl-6 col-lg-12">
            <div class="inner-column wow fadeInLeft">
              <div class="sec-title-h1">
                <h6 class="sub-title">our faqs</h6>
                <h2 class="title">Empowering Knowledge: Your Questions Answered</h2>
              </div>
              <ul class="accordion-box">
                <li class="accordion block active-block">
                  <div class="acc-btn active">How Can Digital Consulting Benefit My Company? <i class="icon fas fa-chevron-down"></i> </div>
                  <div class="acc-content current">
                    <div class="text">It streamlines operations and enhances digital presence through data-driven strategies.</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="image-column col-xl-6">
             <figure class="image"><img src="{{ asset('images/resource/faq1-1.png') }}" alt=""></figure>
          </div>
        </div>
      </div>
    </section>

    <!-- testimonial-area-start -->
    <div class="ks-testimonial-area home2-style">
        <div class="auto-container">
            <div class="sec-title-h2 text-center">
                <h6 class="sub-title">Testimonials</h6>
                <h2 class="title">What Our Clients Say</h2>
            </div>
            <div class="testi-swiper swiper-container">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-block text-center">
                            <div class="text">"{{ $testimonial->content }}"</div>
                            <div class="info">
                                <h4 class="name">{{ $testimonial->name }}</h4>
                                <span class="designation">{{ $testimonial->position }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- contact section h2 -->
    <section class="contact-section-h2 py-100">
        <div class="bg-image"><img src="{{ asset('images/resource/contact1-1.jpg') }}" alt="" style="opacity: 0.1; filter: grayscale(1);"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="content-column col-lg-6">
                    <div class="inner-column wow fadeInLeft">
                        <div class="sec-title-h2">
                            <h6 class="sub-title">Contact Us</h6>
                            <h2 class="title mb-40">Have any projects in mind? Let's work together.</h2>
                            <p class="text mb-40" style="font-size: 1.125rem; color: #555;">Our team is ready to transform your ideas into digital reality. Reach out today for a discovery call.</p>
                        </div>
                        <div class="contact-info">
                            <div class="info-block-item d-flex align-items-center mb-30 p-4 bg-white rounded shadow-sm hover-glow" style="transition: all 0.3s ease;">
                                <div class="icon-box d-flex align-items-center justify-content-center bg-primary rounded-circle text-white me-4" style="width: 60px; height: 60px; min-width: 60px;">
                                    <i class="fal fa-envelope" style="font-size: 24px;"></i>
                                </div>
                                <div class="text-box">
                                    <span class="d-block small text-muted text-uppercase font-bold mb-1">Email Address</span>
                                    <a href="mailto:info@digiagency.com" class="h5 m-0 text-decoration-none" style="color: #333;">info@digiagency.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-column col-lg-6">
                    <div class="inner-column wow fadeInRight">
                        <div class="contact-form-wrapper p-4 p-md-5 bg-white rounded-4 shadow-premium" style="box-shadow: 0 30px 60px rgba(0,0,0,0.08) !important;">
                            @if(session('success'))
                                <div class="alert alert-success d-flex align-items-center gap-3 p-3 mb-4 border-0 shadow-sm">
                                    <i class="fas fa-check-circle" style="font-size: 24px;"></i>
                                    <div>{{ session('success') }}</div>
                                </div>
                            @endif
                            <form method="post" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control premium-input" placeholder="Full Name" required style="padding: 15px 20px; border-radius: 12px; background: #f9f9f9; border: 1px solid #eee;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control premium-input" placeholder="Email Address" required style="padding: 15px 20px; border-radius: 12px; background: #f9f9f9; border: 1px solid #eee;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control premium-input" placeholder="Your Message" required style="padding: 15px 20px; border-radius: 12px; background: #f9f9f9; border: 1px solid #eee; min-height: 150px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="theme-btn btn-style-one w-100 py-3 rounded-3 border-0" type="submit">
                                            <span class="btn-title h5 m-0">Send Message <i class="fal fa-paper-plane ms-2"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
