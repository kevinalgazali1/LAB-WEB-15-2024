<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Agatha All Along</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/marvel.png') }}" alt="Marvel Logo">
        </div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>
    <div class="banner">
        <div class="banner-content">
            @yield('banner-content')
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Marvel. All rights reserved.</p>
    </footer>
</body>
</html>
