@extends('admin.layout.app')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Services</h1>
    <a href="{{ route('admin.services.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Add Service
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 mb-4">
        {{ session('success') }}
    </div>
@endif

<table class="w-full bg-white shadow rounded">
    <tr class="border-b">
        <th class="p-3">#</th>
        <th>Title</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    @foreach($services as $service)
    <tr class="border-b">
        <td class="p-3">{{ $loop->iteration }}</td>
        <td>{{ $service->title }}</td>
        <td>
            {{ $service->is_active ? 'Active' : 'Inactive' }}
        </td>
        <td class="flex gap-2 p-3">
            <a href="{{ route('admin.services.edit', $service) }}"
               class="text-blue-600">Edit</a>

            <form method="POST"
                  action="{{ route('admin.services.destroy', $service) }}">
                @csrf
                @method('DELETE')
                <button class="text-red-600"
                        onclick="return confirm('Delete this service?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
