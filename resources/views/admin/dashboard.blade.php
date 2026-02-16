@extends('admin.layout.app')

@section('content')
<div class="space-y-8" x-data="{ range: 'week' }">
    
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl p-8 text-white shadow-xl relative overflow-hidden mb-8">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-16 -mt-16 blur-2xl"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-12 -mb-12 blur-xl"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h1 class="text-3xl font-bold mb-2">Welcome back, {{ auth()->user()->name }}! 👋</h1>
                <p class="text-blue-100 text-lg opacity-90">Here's what's happening with your agency today.</p>
            </div>
            <div class="flex gap-3">
                <a href="{{ url('/') }}" target="_blank" class="bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/30 text-white px-5 py-2.5 rounded-xl text-sm font-medium transition-all flex items-center gap-2">
                    <i class="fas fa-external-link-alt"></i>
                    View Website
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Services Stat -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-briefcase"></i>
                </div>
                <!-- Mini sparkline or change indicator could go here -->
                <span class="text-xs font-medium text-green-500 bg-green-50 px-2 py-1 rounded-full">+2 new</span>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Total Services</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $services ?? 0 }}</h3>
            </div>
        </div>

        <!-- Portfolio Stat -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-layer-group"></i>
                </div>
                <span class="text-xs font-medium text-purple-600 bg-purple-50 px-2 py-1 rounded-full">Active</span>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Portfolio Projects</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $portfolios ?? 0 }}</h3>
            </div>
        </div>

        <!-- Messages Stat -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-envelope"></i>
                </div>
                @if(($contacts ?? 0) > 0)
                    <span class="text-xs font-medium text-orange-600 bg-orange-50 px-2 py-1 rounded-full">Unread</span>
                @endif
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">New Messages</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $contacts ?? 0 }}</h3>
            </div>
        </div>

        <!-- Testimonials Stat -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                    <i class="fas fa-star"></i>
                </div>
                <span class="text-xs font-medium text-gray-500 bg-gray-50 px-2 py-1 rounded-full">Rating 4.9</span>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Testimonials</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $testimonials ?? 0 }}</h3>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Activity/Recent Items Card (Placeholder for now) -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-bold text-gray-800">Quick Actions</h2>
                <div class="flex gap-2">
                    <!-- Action buttons -->
                </div>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                <a href="{{ route('admin.portfolio.create') }}" class="flex flex-col items-center justify-center p-6 border border-gray-100 rounded-xl hover:bg-gray-50 hover:border-gray-200 transition-all group cursor-pointer text-center">
                    <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Add Project</span>
                </a>

                <a href="{{ url('/admin/services/create') }}" class="flex flex-col items-center justify-center p-6 border border-gray-100 rounded-xl hover:bg-gray-50 hover:border-gray-200 transition-all group cursor-pointer text-center">
                    <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-green-600 group-hover:text-white transition-colors">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Add Service</span>
                </a>
                
                <a href="{{ route('admin.banners.index') }}" class="flex flex-col items-center justify-center p-6 border border-gray-100 rounded-xl hover:bg-gray-50 hover:border-gray-200 transition-all group cursor-pointer text-center">
                    <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center mb-3 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <i class="fas fa-image"></i>
                    </div>
                    <span class="text-sm font-medium text-gray-700">Manage Banners</span>
                </a>
            </div>
            
            <div class="mt-8">
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-4">System Status</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            <span class="text-sm text-gray-600 font-medium">Database Connection</span>
                        </div>
                        <span class="text-xs text-green-600 bg-green-50 px-2 py-1 rounded">Operational</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                            <span class="text-sm text-gray-600 font-medium">File Storage</span>
                        </div>
                        <span class="text-xs text-green-600 bg-green-50 px-2 py-1 rounded">Writeable</span>
                    </div>
                     <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                            <span class="text-sm text-gray-600 font-medium">Laravel Version</span>
                        </div>
                        <span class="text-xs text-gray-500 font-mono">v{{ Illuminate\Foundation\Application::VERSION }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Column -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="text-lg font-bold text-gray-800 mb-6">Recent Updates</h2>
            
            <div class="relative pl-4 border-l-2 border-gray-100 space-y-8">
                <!-- Timeline Item 1 -->
                <div class="relative">
                    <div class="absolute -left-[21px] top-1 w-4 h-4 rounded-full bg-blue-500 border-4 border-white shadow-sm"></div>
                    <p class="text-sm text-gray-500 mb-1">{{ now()->format('M d, H:i') }}</p>
                    <h4 class="text-sm font-semibold text-gray-800">Dashboard Accessed</h4>
                    <p class="text-xs text-gray-500 mt-1">Admin user logged in successfully.</p>
                </div>

                <!-- Timeline Item 2 (Mock Data) -->
                <div class="relative">
                    <div class="absolute -left-[21px] top-1 w-4 h-4 rounded-full bg-gray-300 border-4 border-white shadow-sm"></div>
                    <p class="text-sm text-gray-500 mb-1">{{ now()->subHours(2)->format('M d, H:i') }}</p>
                    <h4 class="text-sm font-semibold text-gray-800">System Backup</h4>
                    <p class="text-xs text-gray-500 mt-1">Automated backup completed.</p>
                </div>
                
                 <!-- Timeline Item 3 (Mock Data) -->
                <div class="relative">
                     <div class="absolute -left-[21px] top-1 w-4 h-4 rounded-full bg-green-400 border-4 border-white shadow-sm"></div>
                    <p class="text-sm text-gray-500 mb-1">{{ now()->subDays(1)->format('M d') }}</p>
                    <h4 class="text-sm font-semibold text-gray-800">Performance Check</h4>
                    <p class="text-xs text-gray-500 mt-1">System running optimally.</p>
                </div>
            </div>
            
            <button class="w-full mt-8 py-2 text-sm text-center text-blue-600 hover:text-blue-700 font-medium hover:bg-blue-50 rounded-lg transition-colors">
                View All Activity
            </button>
        </div>
    </div>
</div>
@endsection
