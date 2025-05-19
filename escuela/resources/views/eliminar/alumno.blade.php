@extends('layout.layout')

@section('content')
    <h1>Eliminar al alumno: {{$alumno->nombre}}({{$alumno->id}})</h1>
    <form action="/alumnos/{{$alumno->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Eliminar</button>
        <a href="/alumnos">Cancelar</a>

    </form>
@endsection