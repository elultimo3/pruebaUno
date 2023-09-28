@extends('layouts.footer_navAdmin')

@section('estylePro')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endsection

@section('contenido')
    <h1 class="text-center">Software</h1>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Seguridad</td>
                    <td>
                        Software de calidad encargado de automatizar entradas y salidas,ya sea de edificios, casas y
                        condominios.
                    </td>
                    <td>$150</td>
                    <td>
                        <form><button class="btn btn-danger">Eliminar</button></form>
                    </td>
                    <td>
                        <form><button class="btn btn-primary">Editar</button></form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
