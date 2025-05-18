@extends('layouts.layout')

@section('title', 'libros')

@section('content')
    <h1>Listado de libros</h1>
    <button><a href="/libros/nuevo">Nuevo libro</a></button>
    
    <ul>
        @foreach ($libros as $libro)
            <li>
                {{$libro->title}}
                <button><a href="/libros/{{$libro->id}}">Ver</a></button>
                <button><a href="/libros/{{$libro->id}}/modificar">modificar</a></button>
                <button><a href="/libros/{{$libro->id}}/eliminar">eliminar</a></button>
            </li>
        @endforeach
    </ul>

    {{-- Para que salga la paginacion --}}
    {{ $libros->links() }}
@endsection