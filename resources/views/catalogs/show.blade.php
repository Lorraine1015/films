@extends('layouts.main')
@section('content')
    <h1>{{$catalog->name}}</h1>
    <p>{{$catalog->description}}</p>
    
    <p><a href="{{ route ('catalogs.index') }}">
    Regresar a las listas</a>
    </p>
    <h2>Peliculas</h2>
    <ul>
        @foreach($catalog->films as $item)
        <li>{{$item->name}}</li>
        @endforeach
    </ul>
@endsection