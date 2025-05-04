<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Mi Aplicación Laravel</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 -KZ Mi Aplicación Laravel</p>
    </footer>
</body>
</html>
