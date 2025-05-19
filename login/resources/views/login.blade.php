<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h1>Iniciar Sesión</h1>

    @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <button type="submit">Entrar</button>
    </form>

    <p>¿No tienes cuenta? <a href="{{ route('register') }}">Registrarse</a></p>

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
