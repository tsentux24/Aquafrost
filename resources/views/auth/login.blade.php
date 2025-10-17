<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aquafrost</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 440px;
        }

        .login-card {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .header-section {
            background: linear-gradient(135deg, #05339C 0%, #1055C9 100%);
            padding: 40px 30px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 8px;
        }

        .logo-icon {
            font-size: 32px;
            color: white;
        }

        .logo-text {
            font-size: 28px;
            font-weight: 700;
            color: white;
        }

        .tagline {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 400;
        }

        .form-container {
            padding: 40px;
        }

        .session-status {
            padding: 16px;
            background: rgba(34, 197, 94, 0.1);
            border: 1px solid rgba(34, 197, 94, 0.3);
            border-radius: 12px;
            margin-bottom: 24px;
            color: #22c55e;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .input-group {
            margin-bottom: 24px;
        }

        .input-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #e2e8f0;
            font-size: 14px;
        }

        .input-container {
            position: relative;
        }

        .modern-input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #334155;
            border-radius: 12px;
            font-size: 16px;
            background: #1e293b;
            color: #f8fafc;
            transition: all 0.2s ease;
        }

        .modern-input:focus {
            outline: none;
            border-color: #3b82f6;
            background: #1e293b;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .modern-input::placeholder {
            color: #64748b;
        }

        .input-icon {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: 16px;
        }

        .modern-input:focus + .input-icon {
            color: #3b82f6;
        }

        .error-message {
            color: #ef4444;
            font-size: 14px;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .modern-checkbox {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 2px solid #475569;
            background: #1e293b;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .modern-checkbox:checked {
            background: #3b82f6;
            border-color: #3b82f6;
        }

        .remember-text {
            font-size: 14px;
            color: #cbd5e1;
            font-weight: 500;
        }

        .forgot-link {
            color: #60a5fa;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: #93c5fd;
        }

        .login-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #05339C, #1055C9);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .login-button:hover {
            background: linear-gradient(135deg, #05339C, #1055C9);
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
        }

        .footer-text {
            text-align: center;
            margin-top: 24px;
            font-size: 14px;
            color: #94a3b8;
        }

        .footer-link {
            color: #60a5fa;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .footer-link:hover {
            color: #93c5fd;
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 30px 24px;
            }

            .header-section {
                padding: 32px 24px;
            }

            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background Bubbles -->

    <div class="login-container">
        <div class="login-card">
            <!-- Header with Logo -->
            <div class="header-section">
               <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
                </a>
                <p class="tagline">Welcome back! Sign in to continue your journey</p>
            </div>

            <!-- Form Container -->
            <div class="form-container">
                <!-- Session Status -->

                    <x-auth-session-status class="mb-4" :status="session('status')" />


                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="input-group">
                        <label class="input-label">Email Address</label>
                        <div class="relative">
                            <input id="email" class="modern-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email">
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        <div class="error-message">

                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="input-group">
                        <label class="input-label">Password</label>
                        <div class="relative">
                            <input id="password" class="modern-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <div class="error-message">

                             <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="remember-forgot">
                        <div class="remember-me">
                            <input id="remember_me" type="checkbox" class="modern-checkbox" name="remember">
                            <span class="remember-text">Remember me</span>
                        </div>
                        <a href="{{ route('password.request') }}" class="forgot-link">
                            Forgot your password?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="login-button">
                        <i class="fas fa-sign-in-alt button-icon"></i>
                        Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

