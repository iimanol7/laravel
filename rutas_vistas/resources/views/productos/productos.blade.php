@extends('layouts.layout') {{-- Usamos la plantilla --}}

@section('contenido') {{-- Establecemos el contenido de la seccion "contenido" del layout (yield) --}}
<h1>Página de productos</h1>
<h2>Contenido variable de la plantilla</h2>
@endsection

@section('titulo', 'Productoss') {{--Si solo es texto se puede pasar como parametro--}}