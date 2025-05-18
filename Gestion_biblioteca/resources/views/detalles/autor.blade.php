@extends('layouts.layout')

@section('title')
    {{$autor->name}}
@endsection

@section('content')
    <a href="/autores">Volver</a>
    <h1>{{$autor->name}}</h1>
    <p><b>Pais:</b> {{ $autor->country }}</p>
    <b>Libros:</b>
    <ul>
        @if (count($libros)>0)
            @foreach ($libros as $libro)
            <li>
                {{ $libro->title }}
            </li>
            @endforeach
            
        @else
            no hay libros
        @endif
        
    </ul>
@endsection