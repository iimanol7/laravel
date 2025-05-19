<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h1>Bienvenido, {{ Auth::user()->name }}</h1>

    <p>Este es el dashboard solo para usuarios registrados.</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
