<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar genero</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar genero</h1>
    <form method="POST"  action="{{route('genres.update',['genre'=>$genre])}}"><!-- Se acciona junto con la funcion.update,su argumento -->
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$genre->name}}" name="genre[name]"><!-- el value=es el que ya tiene registrado y el que se reemplazara -->
        <input type="submit" value="Editar">
    </form>
</body>
</html>