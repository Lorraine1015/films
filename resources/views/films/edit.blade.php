@extends('layouts.main')
@section('content')

    <h1>Editar pelicula</h1>
    <form method="POST"  action="{{route('films.update',['film'=>$film])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$film->name}}" name="film[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <p>Año</p>
        <input type="text" value="{{$film->year}}" name="film[year]">
        <p>Duracion</p>
        <input type="text" value="{{$film->duration}}" name="film[duration]">
        <p>Link</p>
        <input type="text" value="{{$film->link}}" name="film[link]">
        <input type="submit" value="Editar">
    </form>
@endsection