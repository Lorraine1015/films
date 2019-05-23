<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar lista</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar lista</h1>
    <form method="POST"  action="{{route('catalogs.update',['catalog'=>$catalog])}}">
        @csrf 
        {{method_field('PUT')}}
        <p>Nombre</p>
        <input type="text" value="{{$catalog->name}}" name="catalog[name]">
        <p>Descripcion</p>
        <input type="text" value="{{$catalog->description}}" name="catalog[description]">
        
        <input type="submit" value="Editar">
    </form>
</body>
</html>