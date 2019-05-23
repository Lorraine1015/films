<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevas listas</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nueva lista</h1>
    <form method="POST" action="{{ route('catalogs.store') }}">
     @csrf
        <p>Nombre</p>
        <input type="text" value="" name="catalog[name]">
        <p>Descripcion</p>
        <input type="text" value="" name="catalog[description]">
        
        <input type="submit">
    </form>
    
</body>
</html>