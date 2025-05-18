@extends('layouts.layout')

@section('title', 'Crear Libro')

@section('content')
    <a href="/libros">Volver</a>
    <h1>Crear nuevo libro libro</h1>

    <form action="/libros/crear" method="POST">
        @csrf

        Titulo:<input type="text" name="title" value="{{old('title')}}"><br>
            {{-- si hay algun error --}}
            @error('title')
                {{$message}}
            @enderror
            <br>
        Descripción:<input type="text" name="description" value="{{old('description')}}"><br>
        {{-- si hay algun error --}}
            @error('description')
                {{$message}}
            @enderror
            <br>
        Año:<input type="text" name="published_year" value="{{old('published_year')}}"><br>
        {{-- si hay algun error --}}
            @error('published_year')
                {{$message}}
            @enderror
            <br>
        Autor:<select name="author">
            <option value="" selected></option>
            @foreach ($autores as $autor)
                <option value="{{$autor->id}}">{{$autor->name}}</option>
            @endforeach
        </select><br>
        <button>Crear</button>
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