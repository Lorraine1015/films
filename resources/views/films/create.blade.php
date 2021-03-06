<!DOCTYPE html>
@extends('layouts.main')
@section('content')
    <h1>Nueva pelicula</h1>
    <form method="POST" action="{{ route('films.store') }}"><!-- Manda a llamar la funcion.store para almacenar la info. -->
     @csrf
        <p>Nombre</p>
        <input type="text" value="" name="film[name]"><!-- film[nombre que se  le asigna en la tabla] -->
        <p>Año</p>
        <input type="text" value="" name="film[year]">
        <p>Duracion</p>
        <input type="text" value="" name="film[duration]">
        <p>Link</p>
        <input type="text" value="" name="film[link]">
        <p>Genero</p>
        <select name="film[genre_id]">
            @foreach($genres as $item)
                <option value="{{$item->id}}">
                    {{$item->name}}
                </option>
            @endforeach    
        </select>
        <input type="submit">
    </form>
    
@endsection