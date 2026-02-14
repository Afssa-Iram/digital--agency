@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Testimonial</h1>

<form method="POST"
 action="{{ route('admin.testimonials.update', $testimonial) }}">
@csrf
@method('PUT')

<input name="name" value="{{ $testimonial->name }}"
 class="w-full border p-2 mb-3">

<input name="position"
 value="{{ $testimonial->position }}"
 placeholder="Position"
 class="w-full border p-2 mb-3">

<input name="company"
 value="{{ $testimonial->company }}"
 placeholder="Company (Optional)"
 class="w-full border p-2 mb-3">

<textarea name="content"
 class="w-full border p-2 mb-3">
{{ $testimonial->content }}
</textarea>

<div class="mb-4">
    <label class="flex items-center gap-2">
        <input type="checkbox" name="is_active" value="1" {{ $testimonial->is_active ? 'checked' : '' }}>
        <span>Active</span>
    </label>
</div>

<button class="bg-blue-600 text-white px-4 py-2 rounded">
 Update
</button>
</form>
@endsection
