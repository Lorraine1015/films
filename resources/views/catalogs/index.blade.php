@extends('layouts.main')
@section('content')

    <h1>Listas</h1>
    <a href ="{{route('catalogs.create')}}">
        Crear una lista
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($catalogs as $catalog)
                <tr>
                    <td>
                        <a href="{{route('catalogs.show',['catalog'=>$catalog]) }}">
                            {{$catalog ->id}}
                        </a>
                    </td>
                    <td>{{$catalog->name}}</td>
                    <td>{{$catalog->description}}</td>
                    
                    <td>
                        <a href="{{route('catalogs.edit',['catalog'=>$catalog]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('catalogs.delete',['catalog'=>$catalog]) }}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" value="Eliminar">
                        </form>
                        <a href="{{route('films.catalogs.edit',['catalog'=>$catalog])}}">
                            Modificar catalogos
                        </a>
                    </td>
                </tr>
            @endforeach
    </table>
    

@endsection