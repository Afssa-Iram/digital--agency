<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Professional Digital Marketing Agency - Transform your business with our expert services">

        <title>{{ config('app.name', 'Laravel') }} - Digital Marketing Excellence</title>

        <!-- Custom Design System -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar-override.css') }}">
        
        <!-- Tailwind CDN for utility classes -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Alpine.js for interactivity -->
        <script src="//unpkg.com/alpinejs" defer></script>
        
        <!-- Font Awesome for icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body class="font-sans antialiased">
        <div class="scroll-progress" id="scrollProgress"></div>
        
        <div class="floating-orbs">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>

        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
                @yield('content')
            </main>
            
            <!-- Footer -->
            <footer style="background: var(--gradient-dark); color: var(--white); padding: var(--spacing-2xl) var(--spacing-md); margin-top: var(--spacing-2xl);">
                <div class="container">
                    <div class="grid grid-3" style="gap: var(--spacing-xl);">
                        <div>
                            <h3 style="color: var(--white); margin-bottom: var(--spacing-md);">About Us</h3>
                            <p style="color: var(--gray-300);">We are a leading digital marketing agency dedicated to transforming businesses through innovative strategies and creative solutions.</p>
                        </div>
                        <div>
                            <h3 style="color: var(--white); margin-bottom: var(--spacing-md);">Quick Links</h3>
                            <ul style="list-style: none;">
                                <li style="margin-bottom: var(--spacing-xs);"><a href="{{ route('home') }}" style="color: var(--gray-300); text-decoration: none; transition: color var(--transition-fast);">Home</a></li>
                                <li style="margin-bottom: var(--spacing-xs);"><a href="{{ route('services') }}" style="color: var(--gray-300); text-decoration: none;">Services</a></li>
                                <li style="margin-bottom: var(--spacing-xs);"><a href="{{ route('portfolio') }}" style="color: var(--gray-300); text-decoration: none;">Portfolio</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 style="color: var(--white); margin-bottom: var(--spacing-md);">Contact</h3>
                            <p style="color: var(--gray-300);"><i class="fas fa-envelope"></i> info@agency.com</p>
                            <p style="color: var(--gray-300);"><i class="fas fa-phone"></i> +92 300 1234567</p>
                            <div style="margin-top: var(--spacing-md); display: flex; gap: var(--spacing-sm);">
                                <a href="#" style="color: var(--white); font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                                <a href="#" style="color: var(--white); font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                                <a href="#" style="color: var(--white); font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                                <a href="#" style="color: var(--white); font-size: 1.5rem;"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center; margin-top: var(--spacing-xl); padding-top: var(--spacing-lg); border-top: 1px solid rgba(255,255,255,0.1);">
                        <p style="color: var(--gray-300);">&copy; 2026 Digital Marketing Agency. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
        
        <!-- Scroll to Top Button -->
        <button id="scrollToTop" style="position: fixed; bottom: 30px; right: 30px; width: 50px; height: 50px; border-radius: 50%; background: var(--gradient-primary); color: var(--white); border: none; cursor: pointer; box-shadow: var(--shadow-lg); opacity: 0; transition: opacity var(--transition-base); z-index: 999; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-arrow-up"></i>
        </button>
        
        <script>
            // Scroll to top functionality
            const scrollBtn = document.getElementById('scrollToTop');
            const scrollProgress = document.getElementById('scrollProgress');
            
            window.addEventListener('scroll', () => {
                const totalScroll = document.documentElement.scrollHeight - window.innerHeight;
                const windowScroll = window.scrollY;
                const scrollPercent = (windowScroll / totalScroll) * 100;
                
                if (scrollProgress) {
                    scrollProgress.style.width = scrollPercent + '%';
                }

                if (windowScroll > 300) {
                    scrollBtn.style.opacity = '1';
                } else {
                    scrollBtn.style.opacity = '0';
                }
            });

            scrollBtn.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            // Navbar scroll effect
            const navbar = document.querySelector('.navbar');
            if (navbar) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });
            }

            // Reveal on Scroll
            const reveals = document.querySelectorAll('.reveal-on-scroll');
            const revealOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, revealOptions);

            reveals.forEach(reveal => {
                revealObserver.observe(reveal);
            });
        </script>
    </body>
</html>


