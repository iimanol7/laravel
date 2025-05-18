@extends('layouts.layout')

@section('title', 'Modificar Libro')

@section('content')
    <a href="/libros">Volver</a>
    <h1>Modificar el libro : {{$libro->title}}</h1>

    <form action="/libros/{{$libro->id}}" method="POST">
        @csrf
        @method('PUT')

        Titulo:<input type="text" name="title" value="{{$libro->title}}"><br>
            {{-- si hay algun error --}}
            @error('title')
                {{$message}}
            @enderror
            <br>
        Descripción:<input type="text" name="description" value="{{$libro->description}}"><br>
        {{-- si hay algun error --}}
            @error('description')
                {{$message}}
            @enderror
            <br>
        Año:<input type="text" name="published_year" value="{{$libro->published_year}}"><br>
        {{-- si hay algun error --}}
            @error('published_year')
                {{$message}}
            @enderror
            <br>
        Autor:<select name="author">
            <option value="{{$autor->id}}" selected>{{$autor->name}}</option>
            @foreach ($autores as $autor)
                <option value="{{$autor->id}}">{{$autor->name}}</option>
            @endforeach
        </select><br>
        <button>Editar</button>
    </form>

    @if ($errors->any())
            <b>Errores:</b>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>    
                @endforeach
            </ul>
    @endif
@endsection