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
            <label for="name" class="input-label">Full Name</label>
            <div class="input-wrapper">
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
                <i class="fas fa-user input-icon"></i>
            </div>
            <x-input-error :messages="$errors->get('name')" class="error-message" />
        </div>

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
                    autocomplete="username"
                    placeholder="Enter your email"
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
                    autocomplete="new-password"
                    placeholder="Create a password"
                />
                <i class="fas fa-lock input-icon"></i>
            </div>
            <x-input-error :messages="$errors->get('password')" class="error-message" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group">
            <label for="password_confirmation" class="input-label">Confirm Password</label>
            <div class="input-wrapper">
                <input 
                    id="password_confirmation" 
                    type="password" 
                    name="password_confirmation" 
                    required 
                    autocomplete="new-password"
                    placeholder="Confirm your password"
                />
                <i class="fas fa-lock input-icon"></i>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-premium">
            {{ __('Create Account') }}
            <i class="fas fa-arrow-right"></i>
        </button>

        <!-- Links -->
        <div class="form-footer" style="justify-content: center;">
            <a href="{{ route('login') }}" class="link">
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
