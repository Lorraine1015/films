@extends('layouts.main')
@section('content')
<!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$film->name}}</h1>
    <p>{{$film->year}}</p>
    <p>{{$film->duration}}</p>
    <p>{{$film->link}}</p>
    <p><a href="{{ route ('films.index') }}">
    Regresar a la lista de peliculas</a>
    </p>
@endsection