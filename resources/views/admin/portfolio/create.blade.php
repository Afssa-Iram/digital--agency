@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add Portfolio</h1>

<form method="POST"
      action="{{ route('admin.portfolio.store') }}"
      enctype="multipart/form-data">
@csrf

<input name="title" placeholder="Title"
 class="w-full border p-2 mb-3">

<input name="category" placeholder="Category"
 class="w-full border p-2 mb-3">

<textarea name="description"
 class="w-full border p-2 mb-3"></textarea>

<input type="file" name="image"
 class="mb-3">

<div class="mb-3">
    <label class="flex items-center gap-2">
        <input type="checkbox" name="is_featured" value="1">
        <span>Featured Project</span>
    </label>
</div>

<button class="bg-green-600 text-white px-4 py-2 rounded">
 Save
</button>
</form>
@endsection
