@extends('admin.layout.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Services</h1>

<a href="{{ route('admin.services.create') }}"
   class="bg-blue-600 text-white px-4 py-2 rounded">
   Add Service
</a>

<table class="w-full mt-4 bg-white shadow">
    <tr class="border-b">
        <th class="p-2">Title</th>
        <th class="p-2">Status</th>
        <th class="p-2">Actions</th>
    </tr>

    @foreach($services as $service)
    <tr class="border-b">
        <td class="p-2">{{ $service->title }}</td>
        <td class="p-2">{{ $service->status ? 'Active' : 'Inactive' }}</td>
        <td class="p-2">
            <a href="{{ route('admin.services.edit', $service) }}"
               class="text-blue-600">Edit</a>

            <form action="{{ route('admin.services.destroy', $service) }}"
                  method="POST" class="inline">
                @csrf @method('DELETE')
                <button class="text-red-600">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
