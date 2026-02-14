@extends('admin.layout.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Edit Service</h1>

<form method="POST"
 action="{{ route('admin.services.update', $service) }}">
    @csrf @method('PUT')

    <input type="text" name="title"
     value="{{ $service->title }}"
     class="w-full border p-2 mb-3">

    <textarea name="description"
     class="w-full border p-2 mb-3">{{ $service->description }}</textarea>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
@endsection
