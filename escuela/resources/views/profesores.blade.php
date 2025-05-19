@extends('layout.layout')
@section('content')
    <h1>Profesores del centro</h1>
    <a href="/profesores/nuevo">Añadir Profesor</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Profesion</th>
            <th>Grado</th>
            <th>Telefono</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($profesores as $profesor)
            <tr>
                <td>{{ $profesor->nombre }}</td>
                <td>{{ $profesor->profesion }}</td>
                <td>{{ $profesor->grado }}</td>
                <td>{{ $profesor->telefono }}</td>
                <td><button><a href="#">modificar</a></button></td>
                <td><button><a href="#">eliminar</a></button></td>
            </tr>
        @endforeach
    </table>
@endsection