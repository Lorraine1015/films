@extends('layouts.main')
@section('content')
 <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$genre->id}}</h1>
    <p>{{$genre->name}}</p>
    <h1>Peliculas</h1>
    
    <table>
        <thead>
            <tr><!-- Columnas de la tabla -->
                <th>Id</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Duracion</th>
                <th>Link</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genre->films as $item)<!-- Recorre el array  -->
                <tr>
                    <td>
                      {{$item ->id}}
                        
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->year}}</td>
                    <td>{{$item->duration}}</td>
                    <td>{{$item->link}}</td>
                
                      
                </tr>
            @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>
    <p><a href="{{ route ('genres.index') }}">
    Regresar a la lista de generos</a>
    </p>
@endsection