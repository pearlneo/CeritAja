<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    
    <!--========== BOX ICONS ==========-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Dark Light Theme Toggle Button -->
	<div class="theme-toggle">
		<i class="bx bx-moon change-theme" id="theme-button"></i>
	</div>
    
    <div class="container">
        <div class="form-box login" style="width:100%;">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <h1>Reset Password</h1>
                <p>Masukkan email kamu untuk menerima link reset password.</p>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                @if (session('status'))
                    <p style="color:green;">{{ session('status') }}</p>
                @endif
                <!-- ERROR -->
                @if ($errors->any())
                    <p style="color:red;">{{ $errors->first() }}</p>
                @endif

                <button type="submit" class="btn">Email Password Reset Link</button>
                <p>
                    <a href="/auth" class="back-link">Back to Login</a>
                </p>
            </form>
        </div>
    </div>
</body>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
</html>