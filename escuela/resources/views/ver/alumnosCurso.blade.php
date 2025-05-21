@extends('layout.layout')
@section('content')
    <h1>Alumnos matriculados en el curso {{ $curso->nombre }}</h1>
    <table border="1">
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Dirección</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($alumnos as $alumno)
            <tr>
                <td></td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $alumno->direccion }}</td>
                <td><button><a href="/alumnos/{{$alumno->id}}/editar">modificar</a></button></td>
                <td><button><a href="/alumnos/{{$alumno->id}}/borrar">Eliminar</a></button></td>
                <td><button><a href="/alumnos/{{$alumno->id}}/cursos">Cursos</a></button></td>
            </tr>
        @endforeach
    </table>
@endsection