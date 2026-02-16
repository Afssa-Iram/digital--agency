<x-guest-layout>
    <!-- Form Header -->
    <div class="form-header">
        <h2>Welcome Back</h2>
        <p>Sign in to continue to your account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-group">
            <label for="email" class="input-label">Email Address</label>
            <div class="input-wrapper">
                <input 
                    id="email" 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}" 
                    required 
                    autofocus 
                    autocomplete="username"
                    placeholder="name@example.com"
                />
                <i class="fas fa-envelope input-icon"></i>
            </div>
            <x-input-error :messages="$errors->get('email')" class="error-message" />
        </div>

        <!-- Password -->
        <div class="input-group">
            <label for="password" class="input-label">Password</label>
            <div class="input-wrapper">
                <input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required 
                    autocomplete="current-password"
                    placeholder="Enter your password"
                />
                <i class="fas fa-lock input-icon"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Remember Me -->
        <div class="checkbox-group">
            <label for="remember_me" class="custom-checkbox">
                <input id="remember_me" type="checkbox" name="remember">
                <span class="checkmark"></span>
                {{ __('Remember me') }}
            </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-premium">
            {{ __('Log in') }}
            <i class="fas fa-arrow-right"></i>
        </button>

        <!-- Links -->
        <div class="form-footer">
            @if (Route::has('password.request'))
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif
            
            @if (Route::has('register'))
                <a class="link-primary" href="{{ route('register') }}">
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
