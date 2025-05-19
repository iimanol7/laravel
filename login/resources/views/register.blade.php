<!DOCTYPE html>
<html>
<head><title>Registro</title></head>
<body>
    <h1>Registrarse</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Nombre: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <label>Confirmar Contraseña: <input type="password" name="password_confirmation" required></label><br>
        <button type="submit">Registrarse</button>
    </form>

    <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></p>

    {{-- Mostramos todos los errores --}}
    @if ($errors->any())
        <b>Errores</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
            @endforeach
        </ul>
    @endif
</body>
</html>
