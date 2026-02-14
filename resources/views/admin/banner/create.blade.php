@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add Banner</h1>

<form method="POST" action="{{ route('admin.banners.store') }}" enctype="multipart/form-data" class="bg-white p-6 shadow rounded">
    @csrf

    <div class="mb-4">
        <label class="block mb-1">Title</label>
        <input name="title" class="w-full border p-2" required>
    </div>

    <div class="mb-4">
        <label class="block mb-1">Subtitle</label>
        <input name="subtitle" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Button Text</label>
        <input name="button_text" class="w-full border p-2" placeholder="e.g. Learn More">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Button Link</label>
        <input name="button_link" class="w-full border p-2" placeholder="e.g. /services">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Image</label>
        <input type="file" name="image" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1">Order Index</label>
        <input type="number" name="order_index" value="0" class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="is_active" value="1" checked>
            <span>Active</span>
        </label>
    </div>

    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
        Save Banner
    </button>
</form>
@endsection
