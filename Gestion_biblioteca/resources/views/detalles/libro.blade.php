@extends('layouts.layout')

@section('title')
    {{ $libro->title }}
@endsection

@section('content')
<a href="/libros">Volver</a>
    <h1>{{ $libro->title }}</h1>
    <p><b>Año de publicación:</b> {{$libro->published_year}}</p>
    <p><b>Descripción:</b> {{$libro->description}}</p>
    <b>Autor:</b><a href="/autores/{{$autor->id}}">{{$autor->name}}</a>

@endsection