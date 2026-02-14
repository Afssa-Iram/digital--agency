@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add Service</h1>

<form method="POST" action="{{ route('admin.services.store') }}">
    @csrf

    <div class="mb-4">
        <label>Title</label>
        <input type="text" name="title"
               class="w-full border p-2">
    </div>

    <div class="mb-4">
        <label>Description</label>
        <textarea name="description"
                  class="w-full border p-2"></textarea>
    </div>

    <div class="mb-4">
        <label class="flex items-center gap-2">
            <input type="checkbox" name="is_active" value="1" checked>
            <span>Active</span>
        </label>
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Save
    </button>
</form>
@endsection
