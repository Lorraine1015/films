<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $catalog->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body> 
    <h1>{{$catalog->name}}</h1>
    <p>{{$catalog->description}}</p>
    
    <p><a href="{{ route ('catalogs.index') }}">
    Regresar a las listas</a>
    </p>
</body>
</html>