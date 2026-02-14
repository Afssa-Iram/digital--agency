@extends('admin.layout.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

    <div class="grid grid-cols-5 gap-6">
        <div class="bg-white p-4 shadow rounded">
            <h3 class="text-gray-500">Banners</h3>
            <p class="text-2xl font-bold">{{ $banners }}</p>
        </div>
        <div class="bg-white p-4 shadow rounded">
            <h3 class="text-gray-500">Services</h3>
            <p class="text-2xl font-bold">{{ $services }}</p>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h3 class="text-gray-500">Portfolio</h3>
            <p class="text-2xl font-bold">{{ $portfolios }}</p>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h3 class="text-gray-500">Testimonials</h3>
            <p class="text-2xl font-bold">{{ $testimonials }}</p>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h3 class="text-gray-500">Messages</h3>
            <p class="text-2xl font-bold">{{ $contacts }}</p>
        </div>
    </div>
@endsection
