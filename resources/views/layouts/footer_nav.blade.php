<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dorbell</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header" id="inicio">
        <div class="fijar-navegador">
            <nav class="no">
                <a href="{{ url('/') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt=""></a>
                <ul>
                    <li><a href="{{ url('client/ofice') }}">Oficinas</a></li>
                    <li><a href="{{ url('client/edifice') }}">Edificios</a></li>
                    <li><a href="{{ url('client/house') }}">Casas</a></li>
                    <li><a href="{{ url('client/general') }}">General</a></li>
                    <li><a href="{{ url('client/Shopping cart') }}">Carrito</a></li>
                    <li><a href="{{ url('/Sesion')}}">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="mb-4">
        @yield('contenido')
    </main>


    <footer id="contacto mt-5">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Acerca de Mydorbell mexico.</h2>
                <p>Especialistas en cerraduras inteligentes, que mejoran tu experiencia al momento de llegar a tu horas,
                    sintiendo seguridad, comidad y facil de usar. <br>Aviso de privacidad.<br> Derechos reservados:
                    Mydorbell Mexico. </p>

            </div>
            <div class="contact-us">
                <h2 class="brand">Cerraduras inteligentes.</h2>
                <p><br>- Cerraduras con contraseña. <br>- Cerraduras con tarjeta de seguridad. <br>- Cerraduras con
                    huella digital.<br>- Cerraduras con llave. <br>- Cerraduras con inteligentes. </p>

            </div>
            <div class="social-media">

                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>

</body>

</html>
