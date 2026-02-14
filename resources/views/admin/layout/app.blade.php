<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    @include('admin.layout.sidebar')

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col">

        {{-- Navbar --}}
        @include('admin.layout.navbar')

        {{-- Page Content --}}
        <main class="p-6">
            @yield('content')
        </main>
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('services') }}">Services</a>
<a href="{{ route('portfolio') }}">Portfolio</a>
<a href="/contact">Contact</a>

    </div>
</div>

</body>
</html>
