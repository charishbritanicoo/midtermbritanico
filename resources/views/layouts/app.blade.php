<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Cute rounded font (falls back to system fonts if offline) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Shared CSS file linked from public/css/style.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Shared Navigation Bar -->
    <nav class="navbar">
        <div class="logo">&#10047; Student Portal</div>
        <div class="links">
            <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </div>
    </nav>

    <!-- Dynamic Content Area -->
    <main class="site-main">
        @yield('content')
    </main>

    <!-- Shared Footer -->
    <footer class="site-footer">
        <p>&hearts; &copy; {{ date('Y') }} Student Portal. All rights reserved. &hearts;</p>
    </footer>

</body>
</html>
