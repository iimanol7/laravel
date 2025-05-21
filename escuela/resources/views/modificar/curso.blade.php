@extends('layout.layout')
@section('content')
    <h1>Modificar el Curso "{{ $curso->nombre }}"</h1>
    <br>
    <form action="/cursos/{{$curso->id}}" method="POST">
        @csrf
        @method('PUT')
        nombre: <input type="text" name="nombre" value="{{$curso->nombre}}"><br><br>

        nivel: <select name="nivel">
            @foreach ($niveles as $nivel)
                @if ($nivel == $curso->nivel)
                <option value="{{ $nivel }}" selected>{{$nivel}}</option>
                @else
                <option value="{{ $nivel }}">{{$nivel}}</option>
                @endif
            @endforeach
        </select><br><br>

        Horas: <input type="number" name="horas" value="{{$curso->horas}}"><br><br>

        Profesor: <select name="profesor_id">
            @foreach ($profesores as $profesor)
                @if ($profesor->id == $curso->profesor_id)
                    <option value="{{ $profesor->id }}" selected>{{ $profesor->nombre }}</option>
                @else
                <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                @endif
            @endforeach
        </select><br>
           
            <br>
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