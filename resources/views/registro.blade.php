@extends('layouts.footer_nav')

@section('contenido')
    <section class="forma-register">
        <form action="{{ url('admin/index') }}">
            <h2>Registrarse</h2>
            <div>
                <label for="nombre">Nombre:</label><br>
                <input class="controlf" type="text" id="nombre" name="nombre"><br>

                <label for="apellido">Apellido:</label><br>
                <input class="controlf" type="text" id="apellido" name="apellido"><br>

                <label for="correo">Correo electrónico:</label><br>
                <input class="controlf" type="email" id="correo" name="correo"><br>

                <label for="numero">Número de teléfono:</label><br>
                <input class="controlf" type="tel" id="numero" name="numero"><br>

                <label for="direccion">Dirección:</label><br>
                <input class="controlf" type="text" id="direccion" name="direccion"><br>

                <label for="contrasena">Contraseña:</label><br>
                <input class="controlf" type="password" id="contrasena" name="contrasena"><br><br>

                <div class="center-button">
                    <input class="botona" id="botonf" type="submit" value="Registrar">
                </div>
            </div>
    </section>
@endsection
