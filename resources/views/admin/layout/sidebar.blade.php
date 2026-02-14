<aside class="w-64 bg-gray-900 text-white min-h-screen">
    <div class="p-4 text-xl font-bold border-b border-gray-700">
        Admin Panel
    </div>

    <nav class="mt-4">
        <a href="{{ url('/admin/dashboard') }}"
           class="block px-4 py-2 hover:bg-gray-700">
            Dashboard
        </a>

        <a href="{{ route('admin.banners.index') }}"
           class="block px-4 py-2 hover:bg-gray-700">
            Banners
        </a>

        <a href="{{ url('/admin/services') }}"
           class="block px-4 py-2 hover:bg-gray-700">
            Services
        </a>

        <a href="{{ url('/admin/portfolio') }}"
           class="block px-4 py-2 hover:bg-gray-700">
            Portfolio
        </a>

        <a href="{{ url('/admin/testimonials') }}"
           class="block px-4 py-2 hover:bg-gray-700">
            Testimonials
        </a>

        <a href="{{ url('/admin/contacts') }}"
           class="block px-4 py-2 hover:bg-gray-700">
            Contact Messages
        </a>
    </nav>
</aside>
