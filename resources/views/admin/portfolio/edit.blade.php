@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Portfolio</h1>

<form method="POST"
 action="{{ route('admin.portfolio.update', $portfolio) }}"
 enctype="multipart/form-data">
@csrf
@method('PUT')

<input name="title" value="{{ $portfolio->title }}"
 class="w-full border p-2 mb-3">

<input name="category" value="{{ $portfolio->category }}"
 class="w-full border p-2 mb-3">

<textarea name="description"
 class="w-full border p-2 mb-3">
{{ $portfolio->description }}
</textarea>

@if($portfolio->image)
<img src="{{ asset('storage/'.$portfolio->image) }}"
 class="w-24 mb-3">
@endif

<input type="file" name="image">

<div class="mb-3 mt-3">
    <label class="flex items-center gap-2">
        <input type="checkbox" name="is_featured" value="1" {{ $portfolio->is_featured ? 'checked' : '' }}>
        <span>Featured Project</span>
    </label>
</div>

<button class="bg-blue-600 text-white px-4 py-2 rounded">
 Update
</button>
</form>
@endsection
