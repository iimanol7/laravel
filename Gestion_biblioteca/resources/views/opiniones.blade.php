@extends('layouts.layout')

@section('title', 'opiniones')

@section('content')
    <h1>Listado de opiniones</h1>
    <button><a href="/opiniones/nuevo">Publicar opinion</a></button>
    @foreach ($opiniones as $opinion)

        <div style="border:1px solid black; max-width: max-content; padding: 10px">
            <p><b>Usuario:</b>{{$opinion->username}}</p>
            <p><b>Libro: </b> {{ $opinion->book->title }} </p>
            <p><b>Valoración: </b>{{$opinion->rating}}/5</p>
            <p><b>Comentario: </b>{{$opinion->comment}}</p>
        </div>
<br>
    @endforeach
    
    {{-- Para que salga la paginacion --}}
    {{ $opiniones->links() }}
@endsection