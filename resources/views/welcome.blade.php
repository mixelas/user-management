<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebAssignment</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 dark:bg-gray-900 min-h-screen flex flex-col items-center justify-center">

<div class="text-center px-4">
    <img src="{{ asset('image.png') }}" alt="Banner" class="mx-auto mb-6 w-48 h-auto rounded shadow-lg">

    <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-4">Welcome to WebAssignment</h1>
    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">
        Manage your app with <strong class="text-purple-700 dark:text-purple-400">admin</strong> and 
        <strong class="text-orange-700 dark:text-orange-400">user</strong> roles.
    </p>


        <div class="space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-6 py-3 rounded shadow transition">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="bg-pink-200 hover:bg-pink-300 text-black font-semibold px-6 py-3 rounded shadow transition">
                    Sign In
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="bg-teal-200 hover:bg-teal-300 text-black font-semibold px-6 py-3 rounded shadow transition">
                        Create Account
                    </a>
                @endif
            @endauth
        </div>
    </div>

</body>
</html>
