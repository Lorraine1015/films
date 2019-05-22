<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevos generos</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo genero</h1>
    <form method="POST" action="{{route('genres.store')}}">
    @csrf
        <p>Nombre</p>
        <input type="text" value="" name="genre[name]">
        <input type="submit" >
    </form>
    
</body>
</html>