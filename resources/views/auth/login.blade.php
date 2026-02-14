<x-guest-layout>
    <!-- Form Header -->
    <div class="form-header">
        <h2>Welcome Back</h2>
        <p>Sign in to continue to your account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="success-message" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

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
                autofocus 
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
                autocomplete="current-password"
                placeholder="Enter your password"
            />
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Remember Me -->
        <div class="checkbox-group">
            <input id="remember_me" type="checkbox" name="remember">
            <label for="remember_me">{{ __('Remember me') }}</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-premium">
            <i class="fas fa-sign-in-alt" style="margin-right: 0.5rem;"></i>
            {{ __('Log in') }}
        </button>

        <!-- Links -->
        <div class="form-links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    <i class="fas fa-key" style="margin-right: 0.25rem;"></i>
                    {{ __('Forgot password?') }}
                </a>
            @endif
            
            @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    <i class="fas fa-user-plus" style="margin-right: 0.25rem;"></i>
                    Create account
                </a>
            @endif
        </div>

        <!-- Divider -->
        <div class="divider">
            <span>Or continue with</span>
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

