@extends('auth.master')

@section('content')

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Header -->
            <div class="login-header">
                <img src="{{ asset('backend/GM_sansthan.png') }}" alt="GM Sansthan" style="width:60%">
                <p style="margin-top: 10px; font-weight: 500; color: #333; font-size: 15px;">Create New Password</p>
            </div>

            <!-- Password Reset Token (Hidden Input) -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Session Status (Success Alert - Optional) -->
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

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" class="form-input" type="email" name="email"
                        value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
                        placeholder="Email..." readonly />
                    @error('email')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <!-- New Password -->
                <div class="form-group">
                    <label for="password" class="form-label">New Password</label>
                    <div class="password-wrapper">
                        <input id="password" class="form-input" type="password" name="password" required
                            autocomplete="new-password" placeholder="Enter new password..." />
                        <i class="fas fa-eye-slash toggle-password"
                            onclick="togglePasswordVisibility('password', this)"></i>
                    </div>
                    @error('password')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="password-wrapper">
                        <input id="password_confirmation" class="form-input" type="password" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Re-enter new password..." />
                        <i class="fas fa-eye-slash toggle-password"
                            onclick="togglePasswordVisibility('password_confirmation', this)"></i>
                    </div>
                    @error('password_confirmation')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Buttons -->
                <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 10px;">
                    <!-- Submit Button -->
                    <button type="submit" class="login-btn">
                        <i class="fas fa-sync-alt me-2"></i> Reset Password
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

    <!-- === JavaScript for Password Toggle === -->
    <script>
        function togglePasswordVisibility(inputId, iconElement) {
            const input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
                iconElement.classList.remove("fa-eye-slash");
                iconElement.classList.add("fa-eye");
            } else {
                input.type = "password";
                iconElement.classList.remove("fa-eye");
                iconElement.classList.add("fa-eye-slash");
            }
        }
    </script>

@endsection
