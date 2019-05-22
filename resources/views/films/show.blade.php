<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $film->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$film->name}}</h1>
    <p>{{$film->year}}</p>
    <p>{{$film->duration}}</p>
    <p>{{$film->link}}</p>
    <p><a href="{{ route ('films.index') }}">
    Regresar a la lista de peliculas</a>
    </p>
</body>
</html>