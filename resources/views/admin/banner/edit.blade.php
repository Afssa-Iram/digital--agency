@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Banner</h1>

<form method="POST" action="{{ route('admin.banners.update', $banner) }}" enctype="multipart/form-data" class="bg-white p-6 shadow rounded">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block mb-1">Title</label>
        <input name="title" value="{{ $banner->title }}" class="w-full border p-2" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Subtitle</label>
        <input name="subtitle" value="{{ $banner->subtitle }}" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Button Text</label>
        <input name="button_text" value="{{ $banner->button_text }}" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Button Link</label>
        <input name="button_link" value="{{ $banner->button_link }}" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Image</label>
        @if($banner->image)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $banner->image) }}" alt="" class="h-20 w-auto">
            </div>
        @endif
        <input type="file" name="image" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Order Index</label>
        <input type="number" name="order_index" value="{{ $banner->order_index }}" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="is_active" value="1" {{ $banner->is_active ? 'checked' : '' }}>
            <span>Active</span>
        </label>
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
        Update Banner
    </button>
</form>
@endsection
