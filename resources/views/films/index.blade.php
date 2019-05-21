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
    <a href ="{{route('films.create')}}">
        Crear una pelicula
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Año</th>
                <th>Duracion</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
                <tr>
                    <td>
                        <a href="{{route('films.show',['film'=>$film]) }}">
                            {{$film ->id}}
                        </a>
                    </td>
                    <td>{{$film->name}}</td>
                    <td>{{$film->year}}</td>
                    <td>{{$film->duration}}</td>
                    <td>{{$film->link}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>