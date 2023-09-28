@extends('layouts.footer_nav')
@section('contenido')
    <!-- Productos -->
    <section class="buscador w-75 mt-4 mb-5 m-auto">
        <form class="m-auto w-100 d-inline-flex" action="">
            <input class="w-100" type="text" name="" id="">
            <input type="submit" class="btn" value="Buscar">
        </form>
    </section>
    <!-- Contenedores -->
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i <= 5; $i++) { ?>
            <div class="col-8 col-md-4 col-lg-3 m-auto mb-5">
                <div class="contenedorPro bg-body-secondary m-1 mb-4 h-100">
                    <section class="m-auto">
                        <div class="m-auto w-50">
                            <img class="m-auto mt-2 w-100" src="{{ asset('img/camara.jpg') }}" alt="">
                        </div>
                        <div class="w-75 m-auto mb-2 texto text-justify">
                            <h5 class="text-center mt-2 mb-3">$510</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere aspernatur debitis
                                obcaecati
                                libero
                            </p>
                        </div>
                        <div class="formularioDetAgg m-auto">
                            <form class="m-auto d-flex pb-3" action="">
                                <button type="button" class="d-block m-auto btn btn-primary">
                                    <a class="text-decoration-none text-black" href="{{ url('client/details') }}">Detalles
                                        <i class="fas fa-bars"></i></a>
                                </button>
                                <button class="d-block m-auto btn btn-success">
                                    <a class="text-decoration-none text-black" href="#">Agregar <i
                                            class="fas fa-shopping-cart"></i></a>
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
@endsection()
