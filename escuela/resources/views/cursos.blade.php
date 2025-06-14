@extends('layout.layout')
@section('content')

    <h1>Cursos impartidos</h1>
    <a href="/cursos/nuevo">Nuevo curso</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Horas</th>
            <th>Profesor</th>
            <th>Modificar</th>
            <th>Alumnos</th>
        </tr>
        @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->nivel }}</td>
                <td>{{ $curso->horas }}</td>
                <td>{{ $curso->profesor->nombre }}</td>
                <td><button><a href="/cursos/{{$curso->id}}/editar">Modificar</a></button></td>
                <td><button><a href="/cursos/{{$curso->id}}/alumnos">Listado</a></button></td>
            </tr> 
        @endforeach
    </table>
@endsection