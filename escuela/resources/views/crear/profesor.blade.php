@extends('layout.layout')
@section('content')
    <h1>Añadir un nuevo profesor</h1>

    <form action="/profesores/crear" method="POST">
        @csrf
        Nombre:<input type="text" name="nombre" value="{{old('nombre')}}" placeholder="nombre"><br>
        grado:<input type="number" name="grado" value="{{old('grado')}}" placeholder="grado"><br>
        telefono:<input type="text" name="telefono" value="{{old('telefono')}}" placeholder="telefono"><br>
        profesion: <select name="profesion">
            @foreach ($profesiones as $profesion)
                <option value="{{$profesion}}">{{$profesion}}</option>
            @endforeach
        </select>
        
        <br>
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