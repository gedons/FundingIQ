<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts - Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            background-image: url('assets/images/banner/banner-5.jpg');
            background-size: cover;
            background-position: center;
            font-family: 'Nunito', sans-serif;
            position: relative;
            color: white;
            height: 100vh;
            margin: 0;
            overflow: hidden;
            display: flex; /
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1; /* Ensure overlay is above the background */
        }

        .login-container {
            z-index: 2;
            width: 100%;
            max-width: 500px;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
            padding: 40px;
            height: 400px;
        }

        .login-card h3 {
            font-weight: bold;
            margin-bottom: 30px;
            color: #3b4b3b
        }

        .login-card .form-control {
            border-radius: 30px;
            padding: 12px 20px;
            font-size: 16px;
        }

        .login-card .btn-primary {
            background-color: white;
            border-color: #3b4b3b;
            color: #3b4b3b;
            border-radius: 30px;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
        }

        .login-card .btn-primary:hover {
            background-color: #3b4b3b;
            border-color: #fff;
            color: #fff;
        }

        .navbar {
            z-index: 2; /* Ensure navbar is above the overlay */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/signals2.png') }}" alt="Logo" style="width: 80%; max-width: 150px; height: auto; margin-bottom: 10px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="overlay"></div>

    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="login-card">
                    <h3 class="text-center">Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div><br>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="rememberMe" style="color: #3b4b3b"><strong>Remember me</strong></label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-2">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color: #3b4b3b">Forgot password?</a>
                        @endif

                    </div>
                    <div class="text-center">
                        <span style="color: black">Don't have an account?</span> <a href="/register"  style="color: #3b4b3b">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
