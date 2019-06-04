@extends('layouts.main')
@section('content')

    <h1>Nueva lista</h1>
    <form method="POST" action="{{ route('catalogs.store') }}">
     @csrf
        <p>Nombre</p>
        <input type="text" value="" name="catalog[name]">
        <p>Descripcion</p>
        <input type="text" value="" name="catalog[description]">
        
        <input type="submit">
    </form>
    

@endsection
