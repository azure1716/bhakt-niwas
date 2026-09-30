{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('auth.master')

@section('content')

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Header -->
            <div class="login-header">
                <img src="{{ asset('backend/GM_sansthan.png') }}" alt="GM Sansthan" style="width:60%">
                <p style="margin-top: 10px; font-weight: 500; color: #333;">Reset Your Password</p>
            </div>

            <!-- Description -->
            <div style="font-size: 14px; color: #666; text-align: center; line-height: 1.6; margin-bottom: 25px;">
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset
                link that will allow you to choose a new one.
            </div>

            <!-- Session Status (Success Alert) -->
            @if (session('status'))
                <div class="alert-box alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert-box alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}"
                        required autofocus autocomplete="username" placeholder="Enter your email..." />
                    @error('email')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Buttons -->
                <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 10px;">
                    <!-- Submit Button -->
                    <button type="submit" class="login-btn">
                        <i class="fas fa-paper-plane me-2"></i> Email Password Reset Link
                    </button>

                    <!-- Back to Login Link -->
                    <a href="{{ route('login') }}"
                        style="text-align: center; font-size: 14px; color: var(--theme-maroon); text-decoration: none; font-weight: 500; transition: 0.3s; padding: 8px 0;">
                        <i class="fas fa-arrow-left me-1"></i> Back to Login
                    </a>
                </div>

            </form>

        </div>
    </div>

@endsection
