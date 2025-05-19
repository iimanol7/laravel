@extends('layout.layout')
@section('content')
    <h1>Alumnos del centro</h1>
    <form action="/alumnos/filtro" method="POST">
        @method('GET')
        <input type="text" name="nombre" placeholder="Buscar por nombre"><button>Buscar</button>
    </form>
    <br>
    <a href="/alumnos/nuevo">Nuevo Alumno</a>
    <table border="1">
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Direccion</th>
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
                <td><button><a href="/alumnos/{{$alumno->id}}/editar">Modificar</a></button></td>
                <td><button><a href="/alumnos/{{$alumno->id}}/borrar">Eliminar</a></button></td>
            </tr>
        @endforeach
    </table>
@endsection