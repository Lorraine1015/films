@extends('layouts.main')
@section('content')
    <h1>Editar lista</h1>
    <form method="POST"  action="{{route('catalogs.update',['catalog'=>$catalog])}}">
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$catalog->name}}" name="catalog[name]">
        <p>Descripcion</p>
        <input type="text" value="{{$catalog->description}}" name="catalog[description]">
        
        <input type="submit" value="Editar">
    </form>
@endsection