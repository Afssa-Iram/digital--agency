@extends('admin.layout.app')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Banners</h1>
    <a href="{{ route('admin.banners.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Banner
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white shadow rounded">
    <tr class="border-b">
        <th class="p-3">Order</th>
        <th>Image</th>
        <th>Title</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    @foreach($banners as $banner)
    <tr class="border-b">
        <td class="p-3 text-center">{{ $banner->order_index }}</td>
        <td class="p-3">
            @if($banner->image)
                <img src="{{ asset('storage/' . $banner->image) }}" alt="" class="h-12 w-auto">
            @else
                <span class="text-gray-400">No Image</span>
            @endif
        </td>
        <td class="p-3">{{ $banner->title }}</td>
        <td class="p-3 text-center">
            {{ $banner->is_active ? 'Active' : 'Inactive' }}
        </td>
        <td class="flex gap-2 p-3">
            <a href="{{ route('admin.banners.edit', $banner) }}"
               class="text-blue-600">Edit</a>

            <form method="POST"
                  action="{{ route('admin.banners.destroy', $banner) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-600"
                        onclick="return confirm('Delete this banner?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
