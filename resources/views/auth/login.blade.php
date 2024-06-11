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
        body {
            margin: 0;
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
            background-color: white;
            box-sizing: border-box;
            border-radius: 10px;
        }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            background-color: white;
            border-radius: 10px;
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
            border-radius: 10px;
            font-size: 1em;
            font-weight: bold;
        }

        .auth-buttons .register {
            background-color: black;
            color: white;
        }

        .auth-buttons .home {
            color: black;
        }

        .gray-box {
            background-color: #f0f0f0;
            display: flex;
            padding-top: 50px;
            padding-bottom: 50px;
            margin-bottom: 50px;
            justify-content: center;
            width: 100%;    
            height: 100%;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            font-weight: bold;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-container input {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            background-color: black;
            color: white;
            border: none;
            padding: 15px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="top-bar">
            <div class="brand">SewaRuang.id</div>
            <div class="auth-buttons">
                <a href="{{ route('home') }}" class="home">Home</a>
                <a href="{{ route('register') }}" class="register">Register</a>
            </div>
        </div>
        <div class="gray-box">
            <div class="form-container">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" placeholder="Email Address" required autofocus>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
