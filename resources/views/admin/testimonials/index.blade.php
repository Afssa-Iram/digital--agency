@extends('admin.layout.app')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Testimonials</h1>
    <a href="{{ route('admin.testimonials.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Testimonial
    </a>
</div>

@if(session('success'))
<div class="bg-green-100 p-3 mb-4">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow">
<tr class="border-b">
    <th class="p-3">#</th>
    <th>Name</th>
    <th>Position</th>
    <th>Status</th>
    <th>Actions</th>
</tr>

@foreach($testimonials as $item)
<tr class="border-b">
    <td class="p-3">{{ $loop->iteration }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->position }}</td>
    <td>{{ $item->is_active ? 'Active' : 'Inactive' }}</td>
    <td class="flex gap-2 p-3">
        <a href="{{ route('admin.testimonials.edit', $item) }}"
           class="text-blue-600">Edit</a>

        <form method="POST"
              action="{{ route('admin.testimonials.destroy', $item) }}">
            @csrf
            @method('DELETE')
            <button class="text-red-600"
             onclick="return confirm('Delete testimonial?')">
             Delete
            </button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
