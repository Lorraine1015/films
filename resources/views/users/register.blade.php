<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
    
        <h1>Registro de usuarios</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <label>Nombre</label>
            <input type="text" name="name">
            <label>Correo</label>
            <input type="text" name="email">
            <label>Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Registrar">
        </form>
    </body>
</html>