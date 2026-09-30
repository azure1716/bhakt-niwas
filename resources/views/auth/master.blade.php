<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Admin Portal</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        /* Theme Variables matching your website */
        :root {
            --theme-orange: #ff7a00;
            --theme-light-orange: #ffb347;
            --theme-maroon: #9e1e18;
        }

        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fdfdfd;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 40px 35px;
            border-radius: 4px;
            border: 1px solid #f0f0f0;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header .brand-icon {
            color: var(--theme-orange);
            font-size: 32px;
            margin-bottom: 10px;
            display: block;
        }

        .login-header h3 {
            font-family: "Playfair Display", serif;
            color: var(--theme-maroon);
            font-size: 1.6rem;
            margin: 0 0 5px 0;
        }

        .login-header p {
            font-size: 14px;
            color: #777;
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-weight: 500;
            font-size: 14px;
            color: #333;
            margin-bottom: 6px;
        }

        .form-input {
            width: 100%;
            padding: 12px 45px 12px 16px;
            /* Added padding-right for the eye icon */
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            transition: 0.3s;
            background: #fafafa;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--theme-orange);
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(255, 122, 0, 0.08);
        }

        /* === NEW: Password Toggle Wrapper === */
        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            transition: 0.3s;
            font-size: 18px;
            z-index: 10;
        }

        .toggle-password:hover {
            color: var(--theme-orange);
        }

        /* === End Password Toggle === */

        .error-text {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: #dc2626;
            font-weight: 500;
        }

        .login-options {
            display: flex;
            justify-content: end;
            align-items: center;
            margin: 20px 0 25px 0;
            flex-wrap: wrap;
            gap: 10px;
        }

        .checkbox-wrapper {
            font-size: 14px;
            color: #555;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: var(--theme-maroon);
            cursor: pointer;
        }

        .forgot-link {
            font-size: 14px;
            color: var(--theme-maroon);
            text-decoration: none;
            transition: 0.3s;
        }

        .forgot-link:hover {
            color: var(--theme-orange);
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 4px;
            background: var(--theme-maroon);
            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #7a1510;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(158, 30, 24, 0.3);
        }

        /* Alerts */
        .alert-box {
            padding: 12px 15px;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
        }

        .alert-danger {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            margin-bottom: 20px;
        }

        .alert-danger ul {
            margin: 0;
            padding-left: 15px;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 30px 20px;
            }

            .login-options {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>

    @yield('content')

</body>

</html>
