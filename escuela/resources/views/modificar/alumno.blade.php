@extends('layout.layout')
@section('content')
    <h1>Editar al alumno: {{ $alumno->nombre }}({{$alumno->id}})</h1>

    <form action="/alumnos/{{$alumno->id}}" method="POST">
        @csrf
        @method('PUT')
        Nombre:<input type="text" name="nombre" value="{{$alumno->nombre}}" placeholder="nombre"><br>
        Edad:<input type="text" name="edad" value="{{$alumno->edad}}" placeholder="edad"><br>
        Telefono:<input type="text" name="telefono" value="{{$alumno->telefono}}" placeholder="telefono"><br>
        Direccion:<input type="text" name="direccion" value="{{$alumno->direccion}}" placeholder="direccion"><br>
        <button>Modificar</button>
    </form>

     {{-- Mostramos todos los errores --}}
    @if ($errors->any())
        <b>Errores</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
            @endforeach
        </ul>
    @endif
@endsection