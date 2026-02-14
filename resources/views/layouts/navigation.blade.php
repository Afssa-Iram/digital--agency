<nav x-data="{ open: false }" class="navbar glass" style="border-radius: 0 0 var(--radius-lg) var(--radius-lg); margin: 0 1rem;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20"> <!-- Increased h-16 to h-20 -->
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" style="font-family: var(--font-display); font-size: 1.75rem; font-weight: 900; background: var(--gradient-primary); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; text-decoration: none; display: flex; align-items: center; gap: 0.5rem;">
                        <span style="background: var(--gradient-primary); -webkit-text-fill-color: white; padding: 0.5rem; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; box-shadow: var(--shadow-glow);">
                            <i class="fas fa-rocket"></i>
                        </span>
                        <span class="text-gradient">DigiAgency</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:ms-12 sm:flex items-center">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" style="font-weight: 700; font-size: 1rem;">
                         <i class="fas fa-home-alt text-xs opacity-70"></i> Home
                    </a>
                    <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" style="font-weight: 700; font-size: 1rem;">
                         <i class="fas fa-sparkles text-xs opacity-70"></i> Services
                    </a>
                    <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" style="font-weight: 700; font-size: 1rem;">
                         <i class="fas fa-briefcase text-xs opacity-70"></i> Portfolio
                    </a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" style="font-weight: 700; font-size: 1rem;">
                         <i class="fas fa-paper-plane text-xs opacity-70"></i> Contact
                    </a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="nav-link" style="font-weight: 700; font-size: 1rem;">
                             Control Hub
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Right Side -->
            <div class="hidden sm:flex sm:items-center sm:gap-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="glass inline-flex items-center px-6 py-2 border border-transparent text-sm leading-4 font-bold rounded-full text-indigo-900 bg-white/20 hover:bg-white/40 focus:outline-none transition ease-in-out duration-150" style="box-shadow: var(--shadow-sm); border: 1px solid rgba(255,255,255,0.4);">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-2">
                                    <i class="fas fa-chevron-down text-xs"></i>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="glass" style="border-radius: var(--radius-md); overflow: hidden;">
                                <x-dropdown-link :href="route('profile.edit')" style="font-weight: 600;">
                                    <i class="fas fa-user-astronaut"></i> {{ __('Profile') }}
                                </x-dropdown-link>
                                
                                @if(auth()->user()->is_admin)
                                <x-dropdown-link :href="route('admin.dashboard')" style="font-weight: 600;">
                                    <i class="fas fa-command"></i> {{ __('Admin Core') }}
                                </x-dropdown-link>
                                @endif

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();" style="font-weight: 600; color: #ef4444;">
                                        <i class="fas fa-power-off"></i> {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="nav-link" style="font-weight: 700; font-size: 1rem;">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary" style="padding: 0.75rem 2rem; font-size: 0.9375rem; box-shadow: var(--shadow-glow);">
                        <i class="fas fa-bolt"></i> Elevate Now
                    </a>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-indigo-700 hover:text-indigo-900 glass focus:outline-none focus:bg-white/30 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden glass" style="border-top: 1px solid rgba(255,255,255,0.2);">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" style="font-weight: 700;">
                 {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('services')" style="font-weight: 700;">
                 {{ __('Services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('portfolio')" :active="request()->routeIs('portfolio')" style="font-weight: 700;">
                 {{ __('Portfolio') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" style="font-weight: 700;">
                 {{ __('Contact') }}
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" style="font-weight: 700;">
                     {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200/20">
            @auth
                <div class="px-4">
                    <div class="font-bold text-base text-indigo-900">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-indigo-600/70">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" style="font-weight: 600;">
                         {{ __('Profile') }}
                    </x-responsive-nav-link>
                    
                    @if(auth()->user()->is_admin)
                        <x-responsive-nav-link :href="route('admin.dashboard')" style="font-weight: 600;">
                             {{ __('Admin Dashboard') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" style="font-weight: 600; color: #ef4444;">
                             {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="mt-3 space-y-1 px-4 pb-4">
                    <a href="{{ route('login') }}" class="block py-2 text-indigo-900 font-bold">
                         {{ __('Log In') }}
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary w-full justify-center">
                         {{ __('Elevate Now') }}
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>


