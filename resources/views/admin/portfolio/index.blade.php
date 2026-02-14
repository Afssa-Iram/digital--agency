@extends('admin.layout.app')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Portfolio</h1>
    <a href="{{ route('admin.portfolio.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Project
    </a>
</div>

@if(session('success'))
<div class="bg-green-100 p-3 mb-4">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow">
    <tr class="border-b">
        <th class="p-3">Image</th>
        <th>Title</th>
        <th>Category</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

@foreach($portfolios as $item)
<tr class="border-b">
    <td class="p-3">
        @if($item->image)
            <img src="{{ asset('storage/'.$item->image) }}"
                 class="w-16 h-16 object-cover">
        @endif
    </td>
    <td>{{ $item->title }}</td>
    <td>{{ $item->category }}</td>
    <td>{{ $item->is_featured ? 'Featured' : 'Standard' }}</td>
    <td class="flex gap-2 p-3">
        <a href="{{ route('admin.portfolio.edit', $item) }}"
           class="text-blue-600">Edit</a>

        <form method="POST"
              action="{{ route('admin.portfolio.destroy', $item) }}">
            @csrf
            @method('DELETE')
            <button class="text-red-600"
              onclick="return confirm('Delete project?')">
              Delete
            </button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
