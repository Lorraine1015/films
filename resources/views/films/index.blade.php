<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peliculas</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Peliculas</h1>
    <a href ="{{route('films.create')}}"><!-- enlace con la creacion de datos -->
        Crear una pelicula
    </a>
    <table>
        <thead>
            <tr><!-- Columnas de la tabla -->
                <th>Id</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Duracion</th>
                <th>Link</th>
                <th>Genero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)<!-- Recorre el array  -->
                <tr>
                    <td>
                        <a href="{{route('films.show',['film'=>$film]) }}"><!-- Ligado a la muestra de datos -->
                            {{$film ->id}}
                        </a>
                    </td>
                    <td>{{$film->name}}</td>
                    <td>{{$film->year}}</td>
                    <td>{{$film->duration}}</td>
                    <td>{{$film->link}}</td>
                    <td>{{$film->genre->name}}</td>
                    <td>
                        <a href="{{route('films.edit',['film'=>$film]) }}"><!-- Ligado a la edicion de datos -->
                            Editar
                        </a>
                        <form method="POST" action="{{ route('films.delete',['film'=>$film]) }}"><!-- Ligado a la eliminacion de datos -->
                            @csrf
                            {{method_field('DELETE')}}
                            <input type="submit" value="Eliminar">
                        </form>
                        
                    </td>
                </tr>
            @endforeach<!-- Fin del recorrido del array -->
        </tbody>
    </table>
    
</body>
</html>