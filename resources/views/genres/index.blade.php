<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generos</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Generos</h1>
    <a href="{{route('genres.create')}}">
    Crear un genero
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($genres as $genre)
                <tr>
                    <td>
                        <a href="{{route('genres.show',['genre'=>$genre]) }}">
                            {{$genre->id}}
                        </a>
                    </td>
                    <td>{{$genre->name}}</td>
                    <td>
                        <a href="{{route('genres.edit',['genre'=>$genre]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('genres.delete',['genre'=>$genre])}}">
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>