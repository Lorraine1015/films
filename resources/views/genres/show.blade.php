<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $genre->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> <!-- Nos muestra los datos que se almacenaron en la creacion o edicion  -->
    <h1>{{$genre->id}}</h1>
    <p>{{$genre->name}}</p>
    <p><a href="{{ route ('genres.index') }}">
    Regresar a la lista de generos</a>
    </p>
</body>
</html>