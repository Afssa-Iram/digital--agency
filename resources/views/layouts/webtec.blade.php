<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <title>Webtec | Digital Agency Laravel</title>
  
  <!-- Stylesheets -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-home-2.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style-home-3.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/webtec-fix.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/navbar-override.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/testimonial-fix.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/portfolio-fix.css') }}" rel="stylesheet" />

  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  @stack('styles')
</head>

<body>
  <div class="page-wrapper">

    {{-- <div class="preloader" id="preloader"></div> --}}

    <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>

    <!-- Main Header-->
    <header class="main-header header-style-one">
      <div class="outer-container">
        <div class="header-lower anim-fade-move" data-delay="0.25">
          <div class="inner-container">
            <div class="main-box">
              <div class="logo-box">
                <div class="logo">
                  <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <span style="display:none; font-size: 24px; font-weight: 900; color: var(--primary); letter-spacing: -1px;">DIGI<span style="color:#333">AGENCY</span></span>
                  </a>
                </div>
              </div>

              <div class="nav-outer">
                <nav class="nav main-menu">
                  <ul class="navigation">
                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                    <li class="{{ request()->routeIs('portfolio') ? 'current' : '' }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="{{ request()->is('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                    @auth
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endauth
                  </ul>
                </nav>
              </div>

              <div class="action-box">
                <button class="ui-btn search-btn">
                  <i class="icon fal fa-search"></i>
                </button>
                <a href="{{ route('contact') }}" class="theme-btn btn-style-one">
                  <span class="btn-arrow-left">
                    <i class="far fa-chevron-right"></i>
                  </span>
                  <span class="btn-title"> Get In Touch</span>
                </a>
              </div>
              <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
          <div class="upper-box">
            <div class="nav-logo">
              <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="" /></a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
          </div>
          <ul class="navigation clearfix"></ul>
        </nav>
      </div>
    </header>

    <!-- Search Popup -->
    <div class="search-popup">
        <span class="search-back-drop"></span>
        <button class="close-search"><span class="fa fa-times"></span></button>

        <div class="search-inner">
            <form method="get" action="{{ route('search') }}">
                <div class="form-group">
                    <input type="search" name="q" value="" placeholder="Search Here..." required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Search Popup -->

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer footer-style-one">
      <div class="widgets-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="footer-column col-lg-5">
              <div class="footer-widget about-widget wow fadeInLeft">
                <div class="footer-logo"><img src="{{ asset('images/footer-h1-1.png') }}" alt=""></div>
                <div class="text">We create digital experiences that matter. Our agency specializes in modern web solutions and ROI-driven marketing.</div>
              </div>
            </div>
            <div class="footer-column col-lg-2"></div>
            <div class="footer-column style-two col-lg-5">
              <div class="footer-widget subscribe-widget wow fadeInLeft" data-wow-delay="200ms">
                <h5 class="text">Get the latest inspiration & insights</h5>
                <div class="subscribe-form-one">
                  @if(session('success'))
                    <div class="alert alert-success py-1 px-2 mb-2" style="font-size: 12px;">{{ session('success') }}</div>
                  @endif
                  <form method="post" action="{{ route('newsletter.subscribe') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="email" placeholder="Email Address" required="">
                      <button type="submit" class="theme-btn d-flex align-items-center">
                        <i class="fa fa-paper-plane"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-40">
          <div class="row">
            <div class="footer-column border-0 col-lg-5 col-sm-4">
              <div class="footer-widget about-widget wow fadeInLeft">
                <div class="widget-content">
                  <div class="contact-area">
                    <div class="mb-3"><a class="phone" href="tel:+923001234567">+92 300 1234567</a></div>
                    <div><a class="mail" href="mailto:info@digiagency.com">info@digiagency.com</a></div>
                  </div>
                  <div class="social-widget mt-30">
                    <ul class="social-icon-list1">
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-column border-0 col-lg-2 col-sm-1"></div>
            <div class="footer-column style-two border-0 col-lg-5 col-sm-7">
              <div class="row">
                <div class="footer-widget links-widget col">
                  <h5 class="widget-title">Quick Links</h5>
                  <ul class="user-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container text-center">
              <div class="copyright-text">© {{ date('Y') }} DigiAgency. All rights reserved.</div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- AI Magic Helper -->
    <div class="ai-magic-helper" id="aiHelper">
        <button class="ai-helper-btn" title="Ask Magic AI">
            <i class="fas fa-magic"></i>
            <span class="pulse"></span>
        </button>
        <div class="ai-helper-popup" id="aiPopup">
            <div class="popup-header">
                <h6><i class="fas fa-sparkles"></i> Magic Assistant</h6>
                <button class="close-popup"><i class="fas fa-times"></i></button>
            </div>
            <div class="popup-body">
                <p>Hello! I'm your AI assistant. How can I help you elevate your brand today?</p>
                <div class="quick-links">
                    <button class="quick-link-btn" onclick="window.location.href='{{ route('services') }}'">View Solutions</button>
                    <button class="quick-link-btn" onclick="window.location.href='{{ route('contact') }}'">Start Project</button>
                </div>
            </div>
            <div class="popup-footer">
                <input type="text" placeholder="Type a message..." disabled title="AI Chat coming soon!">
                <button disabled><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/wow.js') }}"></script>
  <script src="{{ asset('js/appear.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/swiper.min.js') }}"></script>
  <script src="{{ asset('js/gsap.min.js') }}"></script>
  <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('js/SplitText.min.js') }}"></script>
  <script src="{{ asset('js/purecounter.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  
  <script>
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }
    
    // Fail-safe to remove preloader if script.js fails
    $(window).on('load', function() {
        $('.preloader').fadeOut(500);
    });
    setTimeout(function() {
        $('.preloader').fadeOut(500);
    }, 3000);

    // AI Helper Logic
    $(document).ready(function() {
        $('.ai-helper-btn').on('click', function() {
            $('#aiPopup').toggleClass('active');
        });
        $('.close-popup').on('click', function() {
            $('#aiPopup').removeClass('active');
        });
        // Close on click outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#aiHelper').length) {
                $('#aiPopup').removeClass('active');
            }
        });
    });
  </script>
  
  @stack('scripts')
</body>
</html>
