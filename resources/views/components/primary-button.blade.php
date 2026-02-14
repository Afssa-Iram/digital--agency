<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-6 py-3 bg-[var(--primary)] border border-transparent rounded-xl font-bold text-sm text-white uppercase tracking-widest hover:bg-[var(--primary-dark)] focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all duration-300 shadow-lg hover:shadow-purple-500/20 active:scale-95']) }} style="background: var(--gradient-primary);">
    {{ $slot }}
</button>
