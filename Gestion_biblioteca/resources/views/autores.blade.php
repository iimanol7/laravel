@extends('layouts.layout')

@section('title', 'autores')

@section('content')
    <h1>Listado de autores</h1>
    <button><a href="/autores/nuevo">Crear Nuevo</a></button>
    <ul>
        @foreach ($autores as $autor)
            <li>
                {{ $autor->name }}
                <button><a href="/autores/{{ $autor->id }}">ver</a></button>
                <button><a href="/autores/modificar/{{$autor->id}}">modificar</a></button>
                <button><a href="/autores/eliminar/{{$autor->id}}">borrar</a></button>
            </li>
        @endforeach
    </ul>
    {{-- Para que salga la paginacion --}}
    {{ $autores->links() }}
@endsection