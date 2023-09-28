<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{ asset('img/nueva-imagen.png') }}">
    <title>My Dorbell</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>
    <header class="header" id="inicio">
        <div class="fijar-navegador">
            <nav id="no">
                <a href="{{ url('/') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt=""></a>
                <ul>
                    <li><a href="{{ url('client/ofice') }}">Oficinas</a></li>
                    <li><a href="{{ url('client/edifice') }}">Edificios</a></li>
                    <li><a href="{{ url('client/house') }}">Casas</a></li>
                    <li><a href="{{ url('client/general') }}">General</a></li>
                    <li><a href="{{ url('client/Shopping cart') }}">Carrito</a></li>
                    <li><a href="{{ url('/Sesion') }}">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </div>
        <div class="contenedor head">
            <h1 class="titulo">Seguridad al alcance de tus manos</h1>
            <p class="copy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eaque doloribus, esse
                distinctio deserunt alias animi officia voluptatibus accusantium, sunt sapiente eveniet? Fugit
                repellat
                veritatis hic. Cum optio consequuntur delectus?
            </p>
        </div>
    </header>
    <main>
        <section class="contenedor" id="servicio">
            <h2 class="subtitulo">Diseño unico e Inseperable</h2>
            <div class="contenedor-servicio">
                <img src="img/checket.svg" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"> <samp class="number">1</samp>Diseño web</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti reiciendis quisquam quas,
                            quia iure hic temporibus aliquam eveniet dicta nemo eum accusamus sunt illo illum ut qui
                            doloremque praesentium repellendus.</p>

                    </div>
                    <div class="service">
                        <h3 class="n-service"> <samp class="number">2</samp>Diseño web</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti reiciendis quisquam quas,
                            quia iure hic temporibus aliquam eveniet dicta nemo eum accusamus sunt illo illum ut qui
                            doloremque praesentium repellendus.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"> <samp class="number">3</samp>Diseño web</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti reiciendis quisquam quas,
                            quia iure hic temporibus aliquam eveniet dicta nemo eum accusamus sunt illo illum ut qui
                            doloremque praesentium repellendus.</p>

                    </div>
                </div>
            </div>

        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Productos al Público</h2>
                <div class="contenedor-galeria">
                    <img src="img/bocina.jpg" alt="" class="img-galeria">
                    <img src="img/pru4444.jpg" alt="" class="img-galeria">
                    <img src="img/camaras2.jpg" alt="" class="img-galeria">
                    <img src="img/camaras.jpg" alt="" class="img-galeria">
                    <img src="img/microfono.jpg" alt="" class="img-galeria">
                    <img src="img/6.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="mobile">
            <div class="mobile-image">
                <img src="{{ asset('img/app.jpg')}}" alt="">
            </div>
            <div class="mobile-content">
                <div class="horizontal-links">
                    <a href="#"><img class="app1" src="{{ asset('img/huawei.jpg')}}" alt=""></a>
                    <a href="#"><img class="app1" src="{{ asset('img/apple.jpg')}}" alt=""></a>
                    <a href="#"><img class="app1" src="{{ asset('img/android.jpg')}}" alt=""></a>
                </div>
            </div>
        </section>
    </main>



    <footer id="contacto">
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

    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>

</body>

</html>
