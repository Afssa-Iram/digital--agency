<aside 
    class="bg-white border-r border-gray-200 h-screen w-64 fixed md:relative transition-all duration-300 transform z-30"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full md:translate-x-0 md:w-64'"
    x-cloak>
    
    <!-- Logo Section -->
    <div class="p-6 border-b border-gray-100 flex items-center justify-between">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 no-underline">
            <div class="h-10 w-10 text-white bg-gradient-to-br from-primary to-primary-dark rounded-xl flex items-center justify-center shadow-lg">
                <i class="fas fa-rocket text-lg"></i>
            </div>
            <span class="text-lg font-bold text-gray-800 tracking-tight leading-none">
                AGENCY<br>
                <span class="text-xs text-primary font-medium tracking-widest uppercase">Admin Panel</span>
            </span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="p-4 space-y-1 overflow-y-auto h-[calc(100vh-140px)]"> 
        <!-- Adjusted height to account for footer -->
        
        <a href="{{ route('dashboard') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3 transition-colors {{ request()->routeIs('dashboard') ? 'bg-blue-100 text-blue-600' : 'bg-gray-100 text-gray-500 group-hover:bg-gray-200 group-hover:text-gray-700' }}">
                <i class="fas fa-th-large"></i>
            </div>
            <span>Dashboard</span>
        </a>

        <div class="mt-6 mb-2 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">
            Content Management
        </div>

        <a href="{{ route('admin.banners.index') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->routeIs('admin.banners.*') ? 'bg-purple-50 text-purple-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3 transition-colors {{ request()->routeIs('admin.banners.*') ? 'bg-purple-100 text-purple-600' : 'bg-gray-100 text-gray-500 group-hover:bg-gray-200 group-hover:text-gray-700' }}">
                <i class="fas fa-images"></i>
            </div>
            <span>Banners</span>
        </a>

        <a href="{{ url('/admin/services') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->is('admin/services*') ? 'bg-green-50 text-green-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3 transition-colors {{ request()->is('admin/services*') ? 'bg-green-100 text-green-600' : 'bg-gray-100 text-gray-500 group-hover:bg-gray-200 group-hover:text-gray-700' }}">
                <i class="fas fa-briefcase"></i>
            </div>
            <span>Services</span>
        </a>

        <a href="{{ url('/admin/portfolio') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->is('admin/portfolio*') ? 'bg-pink-50 text-pink-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3 transition-colors {{ request()->is('admin/portfolio*') ? 'bg-pink-100 text-pink-600' : 'bg-gray-100 text-gray-500 group-hover:bg-gray-200 group-hover:text-gray-700' }}">
                <i class="fas fa-layer-group"></i>
            </div>
            <span>Portfolio</span>
            @if(request()->is('admin/portfolio*'))
                <span class="ml-auto bg-pink-100 text-pink-600 py-0.5 px-2 rounded-full text-xs font-bold">Active</span>
            @endif
        </a>

        <a href="{{ url('/admin/testimonials') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->is('admin/testimonials*') ? 'bg-yellow-50 text-yellow-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3 transition-colors {{ request()->is('admin/testimonials*') ? 'bg-yellow-100 text-yellow-600' : 'bg-gray-100 text-gray-500 group-hover:bg-gray-200 group-hover:text-gray-700' }}">
                <i class="fas fa-quote-right"></i>
            </div>
            <span>Testimonials</span>
        </a>

        <div class="mt-6 mb-2 px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">
            Communication
        </div>
        
        <a href="{{ url('/admin/contacts') }}" 
           class="flex items-center px-4 py-3 rounded-xl transition-all duration-200 group {{ request()->is('admin/contacts*') ? 'bg-indigo-50 text-indigo-700 font-semibold' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center mr-3 transition-colors {{ request()->is('admin/contacts*') ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-500 group-hover:bg-gray-200 group-hover:text-gray-700' }}">
                <i class="fas fa-envelope"></i>
            </div>
            <span>Messages</span>
        </a>

    </nav>
    
    <!-- User Profile Strip (Bottom) -->
    <div class="absolute bottom-0 w-full p-4 border-t border-gray-100 bg-gray-50">
        <div class="flex items-center gap-3">
            <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 overflow-hidden">
                <i class="fas fa-user-circle text-2xl"></i>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate">
                    {{ auth()->user()->name }}
                </p>
                <p class="text-xs text-gray-500 truncate">
                    {{ auth()->user()->email }}
                </p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-gray-400 hover:text-red-500 transition-colors p-1" title="Logout">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </div>
</aside>
