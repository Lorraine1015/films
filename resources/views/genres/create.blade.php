@extends('layouts.main')
@section('content')
    <h1>Nuevo genero</h1>
    <form method="POST" action="{{route('genres.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="genre[name]">
        <input type="submit" >
    </form>
    
@endsection