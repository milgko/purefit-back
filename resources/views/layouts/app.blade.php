<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PureFit</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-white text-xl font-semibold">PureFit</a>
            <div>
                <a href="{{ route('home') }}" class="text-white hover:underline mx-2">Home</a>
                <a href="{{ route('classes.index') }}" class="text-white hover:underline mx-2">Classes</a>
                <a href="{{ route('memberships.index') }}" class="text-white hover:underline mx-2">Memberships</a>
                <a href="{{ route('about') }}" class="text-white hover:underline mx-2">About Us</a>
                @auth
                    <a href="{{ route('dashboard') }}" class="text-white hover:underline mx-2">Dashboard</a>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="text-white hover:underline mx-2">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:underline mx-2">Login</a>
                    <a href="{{ route('register') }}" class="text-white hover:underline mx-2">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

>
    <footer class="bg-blue-800 p-4 text-white text-center">
        &copy; {{ date('Y') }} PureFit. All rights reserved.
    </footer>
</body>
</html>


