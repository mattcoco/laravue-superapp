<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mi Aplicación</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mi Aplicación</h1>
        <nav>
            <a href="/">Inicio</a>
            <a href="/profile">Perfil</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mi Aplicación</p>
    </footer>
</body>
</html>
