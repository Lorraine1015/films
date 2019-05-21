<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevas peliculas</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nueva pelicula</h1>
    <form method="POST" action="{{ route('films.store') }}">
     @csrf
        <p>Nombre</p>
        <input type="text" value="" name="film[name]">
        <p>Año</p>
        <input type="text" value="" name="film[year]">
        <p>Duracion</p>
        <input type="text" value="" name="film[duration]">
        <p>Link</p>
        <input type="text" value="" name="film[link]">
        <input type="submit">
    </form>
    
</body>
</html>