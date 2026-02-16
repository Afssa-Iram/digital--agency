@extends('admin.layout.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Add New Project</h1>
            <p class="text-sm text-gray-500 mt-1">Showcase your latest work to the world.</p>
        </div>
        <a href="{{ route('admin.portfolio.index') }}" class="text-gray-500 hover:text-gray-700 font-medium text-sm flex items-center gap-2 transition-colors">
            <i class="fas fa-arrow-left"></i> Back to Portfolio
        </a>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <form method="POST" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data" class="p-6 md:p-8 space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="space-y-2">
                    <label for="title" class="text-sm font-semibold text-gray-700">Project Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" required 
                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all placeholder-gray-400"
                           placeholder="e.g. Modern E-commerce Platform">
                </div>

                <!-- Category -->
                <div class="space-y-2">
                    <label for="category" class="text-sm font-semibold text-gray-700">Category <span class="text-red-500">*</span></label>
                    <input type="text" name="category" id="category" required 
                           class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all placeholder-gray-400"
                           placeholder="e.g. Web Development">
                </div>
            </div>

            <!-- Description -->
            <div class="space-y-2">
                <label for="description" class="text-sm font-semibold text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" 
                          class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all placeholder-gray-400 resize-none"
                          placeholder="Describe the project, challenges, and results..."></textarea>
            </div>

            <!-- Image Upload -->
            <div class="space-y-2" x-data="{ imagePreview: null }">
                <label class="text-sm font-semibold text-gray-700">Project Image</label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-blue-400 transition-colors bg-gray-50 relative group cursor-pointer">
                    <div class="space-y-1 text-center" x-show="!imagePreview">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3 group-hover:text-blue-500 transition-colors"></i>
                        <div class="flex text-sm text-gray-600 justify-center">
                            <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                <span>Upload a file</span>
                                <input id="image" name="image" type="file" class="sr-only" accept="image/*" @change="imagePreview = URL.createObjectURL($event.target.files[0])">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    </div>
                    
                    <!-- Preview -->
                    <div x-show="imagePreview" class="relative w-full h-48" style="display: none;">
                        <img :src="imagePreview" class="w-full h-full object-contain rounded-lg">
                        <button type="button" @click="imagePreview = null; document.getElementById('image').value = ''" 
                                class="absolute top-2 right-2 bg-red-500 text-white p-1 rounded-full shadow hover:bg-red-600 transition-colors">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Featured Toggle -->
            <div class="flex items-center space-x-3 bg-gray-50 p-4 rounded-lg border border-gray-200">
                <div class="flex items-center h-5">
                    <input id="is_featured" name="is_featured" type="checkbox" value="1" 
                           class="focus:ring-blue-500 h-5 w-5 text-blue-600 border-gray-300 rounded cursor-pointer">
                </div>
                <div class="flex-1 min-w-0">
                    <label for="is_featured" class="font-medium text-gray-700 cursor-pointer select-none">Mark as Featured</label>
                    <p class="text-gray-500 text-xs">Featured projects appear on the homepage.</p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
                <a href="{{ route('admin.portfolio.index') }}" class="px-5 py-2.5 rounded-lg text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 font-medium text-sm transition-colors">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                    Save Project
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
