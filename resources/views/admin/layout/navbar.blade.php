<header class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <h2 class="text-lg font-semibold">
        Dashboard
    </h2>

    <div class="flex items-center gap-4">

        <span class="text-gray-700">
            {{ auth()->user()->name }}
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-red-600 hover:underline">
                Logout
            </button>
        </form>

    </div>
</header>
