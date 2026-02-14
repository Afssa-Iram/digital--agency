<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Authentication</title>

        <!-- Custom Design System -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/auth-styles.css') }}">
        
        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            }
        </style>
    </head>
    <body class="font-sans antialiased mesh-background min-h-screen">
        <div class="floating-orbs">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="position: relative; z-index: 10;">
            <div class="reveal-on-scroll active logo-container">
                <a href="/" style="text-decoration: none; display: flex; align-items: center; gap: 1rem;">
                    <div class="logo-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <span class="logo-text">DIGITAL AGENCY</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-10 glass shadow-2xl overflow-hidden sm:rounded-2xl">
                {{ $slot }}
            </div>
        </div>

        <script>
            // Enhanced input animations
            document.querySelectorAll('input').forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });

            // Reveal on scroll
            const reveals = document.querySelectorAll('.reveal-on-scroll');
            reveals.forEach(reveal => {
                reveal.classList.add('active');
            });
        </script>
    </body>
</html>
