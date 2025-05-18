@extends('layouts.layout')

@section('title', 'nuevo autor')

@section('content')
    <h1>Crear un nuevo autor</h1>
    <form action="/autores/crear" method="POST">
        @csrf
        @method('POST')

        Nombre: <input type="text" name="name" value="{{ old('name') }}"><br> 
            {{-- SI no cumple la validacion --}}
            @error('name')
                {{$message}}
            @enderror
        <br>
        Pais: <input type="text" name="pais" value="{{ old('pais') }}"><br>
            @error('pais')
                {{$message}}
            @enderror
        <br>
        <button>Crear</button>
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