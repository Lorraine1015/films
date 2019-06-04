<h1>Iniciar sesión</h1>
<form action="{{route('users.authenticate')}}" method="POST">
    @csrf
    <label>Correo</label>
    <input type="text" name="email">
    <label>Contraseña</label>
    <input type="password" name="password">
    <input type="submit" value="Iniciar sesión">
</form>
<a href="{{ route('users.register') }}">No tengo cuenta</a>