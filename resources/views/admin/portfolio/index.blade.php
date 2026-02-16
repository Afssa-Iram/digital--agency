@extends('admin.layout.app')

@section('content')
<div class="container mx-auto" x-data="{ search: '', status: 'all' }">
    
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-800 tracking-tight">Portfolio</h1>
            <p class="text-sm text-gray-500 mt-1">Manage your creative work and projects.</p>
        </div>
        <a href="{{ route('admin.portfolio.create') }}" 
           class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-6 py-2.5 rounded-xl shadow-lg transform hover:-translate-y-0.5 transition-all duration-200 flex items-center gap-2 font-medium text-sm">
            <i class="fas fa-plus"></i>
            <span>Add New Project</span>
        </a>
    </div>

    <!-- Stats Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 dashboard-card">
            <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center text-xl">
                <i class="fas fa-layer-group"></i>
            </div>
            <div>
                <p class="text-sm text-gray-400 font-medium">Total Projects</p>
                <h3 class="text-2xl font-bold text-gray-800">{{ $portfolios->count() }}</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 dashboard-card">
            <div class="w-12 h-12 bg-green-50 text-green-500 rounded-xl flex items-center justify-center text-xl">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <p class="text-sm text-gray-400 font-medium">Published</p>
                <h3 class="text-2xl font-bold text-gray-800">{{ $portfolios->count() }}</h3> <!-- Assuming all are published for now -->
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4 dashboard-card">
            <div class="w-12 h-12 bg-purple-50 text-purple-500 rounded-xl flex items-center justify-center text-xl">
                <i class="fas fa-star"></i>
            </div>
            <div>
                <p class="text-sm text-gray-400 font-medium">Featured</p>
                <h3 class="text-2xl font-bold text-gray-800">{{ $portfolios->where('is_featured', true)->count() }}</h3>
            </div>
        </div>
    </div>

    <!-- Filters & Search -->
    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="relative w-full md:w-96">
            <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
            <input type="text" x-model="search" placeholder="Search projects..." 
                   class="w-full pl-10 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
        </div>
        
        <div class="flex items-center gap-3 w-full md:w-auto">
            <select x-model="status" class="bg-gray-50 border border-gray-200 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                <option value="all">All Status</option>
                <option value="published">Published</option>
                <option value="draft">Draft</option>
            </select>
        </div>
    </div>

    @if(session('success'))
    <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded-r-lg shadow-sm flex items-center justify-between" role="alert">
        <div class="flex items-center">
            <i class="fas fa-check-circle text-green-500 mr-2 text-xl"></i>
            <p class="text-green-700 font-medium">{{ session('success') }}</p>
        </div>
        <button onclick="this.parentElement.remove()" class="text-green-400 hover:text-green-600">
            <i class="fas fa-times"></i>
        </button>
    </div>
    @endif

    <!-- Portfolio Table -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase text-gray-500 font-semibold tracking-wider">
                        <th class="p-4 w-24 text-center">Preview</th>
                        <th class="p-4">Project Details</th>
                        <th class="p-4">Category</th>
                        <th class="p-4 text-center">Status</th>
                        <th class="p-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($portfolios as $item)
                    <tr class="hover:bg-gray-50 transition-colors duration-150 group">
                        <td class="p-4 text-center">
                            <div class="w-16 h-16 rounded-xl overflow-hidden border border-gray-200 shadow-sm mx-auto relative group-hover:scale-105 transition-transform duration-300">
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image text-xl"></i>
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="p-4">
                            <h3 class="font-bold text-gray-800 text-sm mb-1 group-hover:text-blue-600 transition-colors">{{ $item->title }}</h3>
                            <p class="text-xs text-gray-500 line-clamp-1">Client: {{ $item->client ?? 'N/A' }}</p> 
                            <!-- Assuming 'client' exists, fallback if not -->
                        </td>
                        <td class="p-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                {{ $item->category }}
                            </span>
                        </td>
                        <td class="p-4 text-center">
                            @if($item->is_featured)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-50 text-purple-700 border border-purple-100">
                                    <span class="w-1.5 h-1.5 bg-purple-500 rounded-full mr-1.5"></span>
                                    Featured
                                </span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">
                                    Standard
                                </span>
                            @endif
                        </td>
                        <td class="p-4 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <a href="{{ route('admin.portfolio.edit', $item) }}" 
                                   class="text-gray-400 hover:text-blue-600 p-2 rounded-lg hover:bg-blue-50 transition-colors" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form method="POST" action="{{ route('admin.portfolio.destroy', $item) }}" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-gray-400 hover:text-red-600 p-2 rounded-lg hover:bg-red-50 transition-colors" title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-gray-400">
                            <div class="flex flex-col items-center justify-center">
                                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-folder-open text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900">No Projects Found</h3>
                                <p class="mt-1 text-sm text-gray-500">Get started by creating a new project.</p>
                                <a href="{{ route('admin.portfolio.create') }}" class="mt-4 text-blue-600 hover:text-blue-800 font-medium text-sm">
                                    Create New Project &rarr;
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination (if applicable) -->
        @if(method_exists($portfolios, 'links'))
        <div class="bg-gray-50 px-4 py-3 border-t border-gray-200 sm:px-6">
            {{ $portfolios->links() }} 
        </div>
        @endif
    </div>
</div>

<script>
    // Alpine.js logic for simple search filtering (client-side)
    document.addEventListener('alpine:init', () => {
        Alpine.data('portfolioFilter', () => ({
            search: '',
            status: 'all',
            // Note: This is just a placeholder, real search should be backend or manipulate DOM if items are few
        }))
    })
</script>
@endsection
