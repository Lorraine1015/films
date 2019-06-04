<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Peliculas</h1>
    @include('layouts.partials.social-media')
    <ul>
        <li>
            <a href="{{route('home')}}">Inicio</a>
        </li>
        <li>
            <a href="{{route('films.index')}}">Peliculas</a>
        </li>
        <li>
            <a href="{{route('genres.index')}}">Generos</a>
        </li>
        <li>
            <a href="{{route('catalogs.index')}}">Catalogos</a>
        </li>

    </ul>
    @yield('content')
    @include('layouts.partials.social-media')
</body>
</html>