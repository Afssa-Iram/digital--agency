<x-guest-layout>
    <!-- Form Header -->
    <div class="form-header">
        <h2>Create Account</h2>
        <p>Join our digital marketing platform</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="input-group">
            <label for="name">
                <i class="fas fa-user" style="margin-right: 0.5rem; color: var(--auth-primary);"></i>
                Full Name
            </label>
            <input 
                id="name" 
                type="text" 
                name="name" 
                value="{{ old('name') }}" 
                required 
                autofocus 
                autocomplete="name"
                placeholder="Enter your full name"
            />
            <x-input-error :messages="$errors->get('name')" class="error-message" />
        </div>

        <!-- Email Address -->
        <div class="input-group">
            <label for="email">
                <i class="fas fa-envelope" style="margin-right: 0.5rem; color: var(--auth-primary);"></i>
                Email Address
            </label>
            <input 
                id="email" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="username"
                placeholder="Enter your email"
            />
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <!-- Password -->
        <div class="input-group">
            <label for="password">
                <i class="fas fa-lock" style="margin-right: 0.5rem; color: var(--auth-primary);"></i>
                Password
            </label>
            <input 
                id="password" 
                type="password" 
                name="password" 
                required 
                autocomplete="new-password"
                placeholder="Create a password"
            />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group">
            <label for="password_confirmation">
                <i class="fas fa-lock" style="margin-right: 0.5rem; color: var(--auth-primary);"></i>
                Confirm Password
            </label>
            <input 
                id="password_confirmation" 
                type="password" 
                name="password_confirmation" 
                required 
                autocomplete="new-password"
                placeholder="Confirm your password"
            />
            <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-premium">
            <i class="fas fa-user-plus" style="margin-right: 0.5rem;"></i>
            {{ __('Create Account') }}
        </button>

        <!-- Links -->
        <div class="form-links" style="justify-content: center;">
            <a href="{{ route('login') }}">
                <i class="fas fa-sign-in-alt" style="margin-right: 0.25rem;"></i>
                {{ __('Already have an account? Sign in') }}
            </a>
        </div>

        <!-- Divider -->
        <div class="divider">
            <span>Or sign up with</span>
        </div>

        <!-- Social Login -->
        <div class="social-login">
            <button type="button" class="social-btn">
                <i class="fab fa-google" style="color: #DB4437;"></i>
                Google
            </button>
            <button type="button" class="social-btn">
                <i class="fab fa-github" style="color: #333;"></i>
                GitHub
            </button>
        </div>
    </form>
</x-guest-layout>

