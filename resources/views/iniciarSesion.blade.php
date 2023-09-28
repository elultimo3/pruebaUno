@extends('layouts.footer_nav')

@section('contenido')
    <section class="forma-register">
        <form action="{{ url('admin/index') }}">
            <h2>Iniciar sesión</h2>
            <div>
                <label for="correo">Correo electrónico:</label><br>
                <input class="controlf" type="email" id="correo" name="correo"><br>
                <label for="contrasena">Contraseña:</label><br>
                <input class="controlf" type="password" id="contrasena" name="contrasena"><br><br>
                <input class="botona" id="botonf" type="submit" value="Iniciar sesión"> <br><br>
            </div>
        </form>
        <a href="{{ url('/register') }}" class="link d-block">Crear cuenta</a> <!-- Corregí el enlace "Crear cuenta" -->
        <a href="../php/recuperarContraseña.php">Recuperar contraseña</a>
    </section>
@endsection
