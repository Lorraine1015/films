<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar pelicula</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar pelicula</h1>
    <form method="POST"  action="{{route('films.update',['film'=>$film])}}">
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$film->name}}" name="film[name]">
        <p>Año</p>
        <input type="text" value="{{$film->year}}" name="film[year]">
        <p>Duracion</p>
        <input type="text" value="{{$film->duration}}" name="film[duration]">
        <p>Link</p>
        <input type="text" value="{{$film->link}}" name="film[link]">
        <input type="submit" value="Editar">
    </form>
</body>
</html>