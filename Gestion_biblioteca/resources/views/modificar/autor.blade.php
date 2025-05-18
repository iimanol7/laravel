@extends('layouts.layout')

@section('title', 'modificar')

@section('content')
    <a href="/autores">Volver</a>
    <h1>Modificar autor</h1>

    <form action="/autores/{{$autor->id}}" method="POST">
        {{-- obligatorio --}}
        @csrf
        {{-- Especificamos el tipo de accion --}}
        @method('PUT')

        nombre: <input type="text" name="name" value="{{$autor->name}}"><br>
            {{-- SI no cumple la validacion --}}
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        País: <input type="text" name="pais" value="{{$autor->country}}">
            @error('pais')
                <p>{{ $message }}</p>
            @enderror

        <button type="submit">Modificar</button>
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