@extends('admin.layout.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Contact Messages</h1>

@if(session('success'))
<div class="bg-green-100 p-3 mb-4">
    {{ session('success') }}
</div>
@endif

<table class="w-full bg-white shadow">
<tr class="border-b">
    <th class="p-3">Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Action</th>
</tr>

@foreach($messages as $msg)
<tr class="border-b">
    <td class="p-3">{{ $msg->name }}</td>
    <td>{{ $msg->email }}</td>
    <td>{{ $msg->subject }}</td>
    <td>{{ Str::limit($msg->message, 50) }}</td>
    <td>
        <form method="POST"
         action="{{ route('admin.contacts.destroy', $msg) }}">
        @csrf
        @method('DELETE')
        <button class="text-red-600"
         onclick="return confirm('Delete message?')">
         Delete
        </button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
@php use Illuminate\Support\Str; @endphp
