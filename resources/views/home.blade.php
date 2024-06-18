<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SewaRuang.id</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body, html {
            margin: 0;
            padding-top: 50px;
            padding-bottom: 50px;
            height: 100%;
            font-family: 'Nunito', sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 80%;
            height: auto;
            margin: 20px;
            padding: 50px;
            background-color: white;
            box-sizing: border-box;
            border-radius: 10px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }

        .brand {
            font-size: 40px;
            color: black;
            font-weight: bold;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .auth-buttons a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
        }

        .auth-buttons .login {
            background-color: black;
            color: white;
            font-weight: bold;
        }

        .auth-buttons .register {
            color: black;
            font-weight: 800;
        }

        .hero-image {
            position: relative;
            text-align: center;
            color: white;
            margin: 20px 0;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            filter: brightness(0.5);
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .hero-text h1 {
            font-size: 3em;
            font-weight: bold;
        }

        .hero-text p {
            font-size: 1.25em;
            font-weight: bold;
            margin-bottom: 70px;
        }

        .hero-text .btn {
            background-color: black;
            border-radius: 10px;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <div class="brand">SewaRuang.id</div>
            <div class="auth-buttons">
                @guest
                    <a href="{{ route('register') }}" class="register">Register</a>
                    <a href="{{ route('login') }}" class="login">Login</a>
                @else
                    <a href="{{ route('logout') }}" class="login"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/homeimage.jpg') }}" alt="Room Image">
            <div class="hero-text">
                <h1>Find Your Best Room!</h1>
                <p>Provides many rooms for your needs.</p>
                <a href="{{ url('/about') }}" class="btn">Details</a>
            </div>
        </div>
    </div>
</body>
</html>
