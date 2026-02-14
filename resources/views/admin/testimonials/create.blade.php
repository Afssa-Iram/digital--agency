@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add Testimonial</h1>

<form method="POST"
 action="{{ route('admin.testimonials.store') }}">
@csrf

<input name="name" placeholder="Client Name"
 class="w-full border p-2 mb-3">

<input name="position" placeholder="Position / Designation"
 class="w-full border p-2 mb-3">

<input name="company" placeholder="Company (Optional)"
 class="w-full border p-2 mb-3">

<textarea name="content"
 class="w-full border p-2 mb-3"
 placeholder="Client Message / Content"></textarea>

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
