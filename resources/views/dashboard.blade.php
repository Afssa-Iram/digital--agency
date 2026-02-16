<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 leading-tight flex items-center gap-2">
                <i class="fas fa-th-large text-primary"></i>
                {{ __('Dashboard') }}
            </h2>
            <div class="text-sm text-gray-500 font-medium">
                {{ now()->format('l, F j, Y') }}
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 relative group transition-all duration-300 hover:shadow-2xl">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-orange-400 to-secondary"></div>
                
                <div class="p-8 sm:p-10 relative z-10">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="flex-1">
                            <h3 class="text-3xl font-extrabold text-gray-900 mb-2">
                                Welcome back, <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">{{ Auth::user()->name }}</span>! 👋
                            </h3>
                            <p class="text-lg text-gray-600 leading-relaxed mb-6 max-w-2xl">
                                You are now logged in to your account. From here, you can manage your profile, view your activity, and explore our latest updates.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-6 py-3 bg-gray-900 border border-transparent rounded-xl font-semibold text-white hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 shadow-lg transform hover:-translate-y-0.5">
                                    <i class="fas fa-user-circle mr-2"></i>
                                    Manage Profile
                                </a>
                                <a href="/" class="inline-flex items-center px-6 py-3 bg-white border border-gray-300 rounded-xl font-semibold text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring ring-primary focus:border-primary active:bg-gray-100 transition ease-in-out duration-150 shadow-sm transform hover:-translate-y-0.5">
                                    <i class="fas fa-home mr-2"></i>
                                    Go to Homepage
                                </a>
                            </div>
                        </div>
                        
                        <!-- Illustration/Graphic Placeholder -->
                        <div class="hidden md:block w-64 h-64 relative">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-50 rounded-full opacity-70 animate-pulse"></div>
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random&size=256" alt="Profile" class="rounded-full shadow-2xl border-4 border-white relative z-10 w-full h-full object-cover transform rotate-3 hover:rotate-0 transition-transform duration-500">
                            
                            <!-- Floating Badge -->
                            <div class="absolute -bottom-2 -right-2 bg-white px-4 py-2 rounded-lg shadow-lg border border-gray-100 flex items-center gap-2 animate-bounce">
                                <span class="w-3 h-3 bg-green-500 rounded-full block"></span>
                                <span class="text-sm font-bold text-gray-700">Active Now</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Background Decoration -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-bl-full pointer-events-none"></div>
            </div>

            <!-- Quick Actions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Action 1 -->
                <a href="{{ route('profile.edit') }}" class="group block bg-white overflow-hidden shadow-md rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-300 shadow-sm">
                            <i class="fas fa-cog"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors">Account Settings</h4>
                            <p class="text-sm text-gray-500">Update password & details</p>
                        </div>
                        <div class="ml-auto text-gray-300 group-hover:text-blue-500 transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Action 2 -->
                <a href="#" class="group block bg-white overflow-hidden shadow-md rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-purple-50 text-purple-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-300 shadow-sm">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 group-hover:text-purple-600 transition-colors">Notifications</h4>
                            <p class="text-sm text-gray-500">Check recent updates</p>
                        </div>
                        <div class="ml-auto text-gray-300 group-hover:text-purple-500 transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>

                <!-- Action 3 -->
                <a href="#" class="group block bg-white overflow-hidden shadow-md rounded-2xl border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="p-6 flex items-center gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-green-50 text-green-600 flex items-center justify-center text-2xl group-hover:scale-110 transition-transform duration-300 shadow-sm">
                            <i class="fas fa-life-ring"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-gray-800 group-hover:text-green-600 transition-colors">Support Center</h4>
                            <p class="text-sm text-gray-500">Get help with issues</p>
                        </div>
                        <div class="ml-auto text-gray-300 group-hover:text-green-500 transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Recent Activity Placeholder -->
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-2xl border border-gray-100">
                <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-history text-gray-400"></i>
                        Recent Activity
                    </h3>
                    <button class="text-sm text-primary font-medium hover:underline">View All</button>
                </div>
                <div class="p-6">
                     <div class="flex flex-col space-y-4">
                        <!-- Item -->
                        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-100">
                            <div class="w-2 h-2 mt-2 rounded-full bg-green-500 flex-shrink-0"></div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">New login detected</p>
                                <p class="text-xs text-gray-500 mt-0.5">Your account was accessed from this device just now.</p>
                            </div>
                            <span class="text-xs text-gray-400 font-medium">{{ now()->diffForHumans() }}</span>
                        </div>
                        <!-- Validating previous login time isn't stored, so we just show current login as an example -->
                     </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
