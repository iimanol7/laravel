<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}

    <title>@yield('title')</title>
</head>
<body>
    
    <nav>
        <a href="/">Home</a>
        <a href="/autores">Autores</a>
        <a href="/libros">Libros</a>
        <a href="/opiniones">Opiniones</a>
    </nav>

    @yield('content')
</body>
</html>