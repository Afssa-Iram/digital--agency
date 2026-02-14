@extends('admin.layout.app')

@section('content')
<h1 class="text-xl font-bold mb-4">Add Service</h1>

<form method="POST" action="{{ route('admin.services.store') }}">
    @csrf

    <input type="text" name="title"
        class="w-full border p-2 mb-3" placeholder="Service Title">

    <textarea name="description"
        class="w-full border p-2 mb-3"
        placeholder="Service Description"></textarea>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
        Save
    </button>
</form>
@endsection
