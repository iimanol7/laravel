@extends('layout.layout')
@section('content')
    <h1>Añadir un nuevo alumno</h1>

    <form action="/alumnos/crear" method="POST">
        @csrf
        Nombre:<input type="text" name="nombre" value="{{old('nombre')}}" placeholder="nombre"><br>
        Edad:<input type="text" name="edad" value="{{old('edad')}}" placeholder="edad"><br>
        Telefono:<input type="text" name="telefono" value="{{old('telefono')}}" placeholder="telefono"><br>
        Direccion:<input type="text" name="direccion" value="{{old('direccion')}}" placeholder="direccion"><br>
        <button>Crear</button>
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