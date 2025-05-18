@extends('layouts.layout')

@section('title', 'Nueva Opinion')

@section('content')
    <a href="/libros">Volver</a>
    <h1>Nueva opinion</h1>
    <form action="/opiniones/crear" method="POST">
        @csrf
        username:<input type="text" name="username"><br>
        Libro: <select name="book_id">
            <option value=""></option>
            @foreach ($libros as $libro)
                <option value="{{$libro->id}}">{{$libro->title}}</option>
            @endforeach
        </select><br>
        rating:<input type="number" name="rating" max="5" min="1"><br>
        Opinion:<textarea name="comment"></textarea><br>
        <button>Publicar</button>

    </form>

     {{-- Mostramos todos los errores --}}
    @if ($errors->any())
        <b>Errores</b>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>    
            @endforeach
        </ul>
    @endif
@endsection
