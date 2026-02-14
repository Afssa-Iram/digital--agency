@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Service</h1>

<form method="POST"
      action="{{ route('admin.services.update', $service) }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label>Title</label>
        <input type="text" name="title"
               value="{{ $service->title }}"
               class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label>Description</label>
        <textarea name="description"
                  class="w-full border p-2">{{ $service->description }}</textarea>
    </div>

    <div class="mb-4">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="is_active" value="1" {{ $service->is_active ? 'checked' : '' }}>
            <span>Active</span>
        </label>
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded">
        Update
    </button>
</form>
@endsection
