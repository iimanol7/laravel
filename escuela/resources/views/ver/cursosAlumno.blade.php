@extends('layout.layout')
@section('content')
    <h1>Cursos de {{ $alumno->nombre }}</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Horas</th>
            <th>Profesor</th>
            <th></th>
        </tr>
        @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->nivel }}</td>
                <td>{{ $curso->horas }}</td>
                <td>{{ $curso->profesor->nombre }}</td>
                <td><form action="/alumnos/{{$alumno->id}}/{{$curso->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Eliminar Matricula</button>
                </form></td>
            </tr> 
        @endforeach
    </table>
@endsection