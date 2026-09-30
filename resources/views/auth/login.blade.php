@extends('auth.master')

@section('content')

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Header -->
            <div class="login-header">
                <img src="{{ asset('backend/GM_sansthan.png') }}" alt="GM Sansthan" style="width:60%">
            </div>

            <!-- Session Status (Success Alert) -->
            @if (session('status'))
                <div class="alert-box alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-box alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}"
                        required autofocus autocomplete="username" placeholder="Email..." />
                    @error('email')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password (Updated with Show/Hide Toggle) -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="password-wrapper">
                        <input id="password" class="form-input" type="password" name="password" required
                            autocomplete="current-password" placeholder="..." />
                        <i class="fas fa-eye-slash toggle-password"
                            onclick="togglePasswordVisibility('password', this)"></i>
                    </div>
                    @error('password')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="login-options">
                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit" class="login-btn">
                    Log in
                </button>
            </form>

        </div>
    </div>

    <!-- === NEW: JavaScript for Password Toggle === -->
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
