<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WebAssignment</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        @auth
            <p>Συνδεδεμένος ως: {{ auth()->user()->name }} ({{ auth()->user()->role }})</p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Αποσύνδεση</button>
            </form>
            <hr>
        @endauth

        @yield('content')
    </div>
</body>
</html>
