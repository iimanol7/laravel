@extends('layout.layout')
@section('content')
    <h1>Crea un Nuevo Curso</h1>
    <br>
    <form action="/cursos/crear" method="POST">
        @csrf
        @method('POST')
        nombre: <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
            @error('nombre')
                {{ $message }}
            @enderror
            <br>
        nivel: <select name="nivel">
            @foreach ($niveles as $nivel)
                <option value="{{ $nivel }}">{{$nivel}}</option>
            @endforeach
        </select><br>
            @error('nivel')
                {{$message}}
            @enderror
            <br>
        Horas: <input type="number" name="horas" value="{{ old('horas') }}"><br>
            @error('horas')
                {{ $message }}
            @enderror
            <br>
        Profesor: <select name="profesor_id">
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
            @endforeach
        </select><br>
            @error('profesor_id')
                {{$message}}   
            @enderror
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