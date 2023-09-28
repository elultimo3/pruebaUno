@extends('layouts.footer_navAdmin')

@section('estylePro')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
@endsection

@section('contenido')
    <h1 class="text-center">Usuarios</h1>
    <div class="card-body">
        <table id="datatablesSimple" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Correo</th>
                    <th>N° Celular</th> <!-- Cerrado correctamente -->
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Correo</th>
                    <th>N° Celular</th> <!-- Cerrado correctamente -->
                </tr>
            </tfoot>
            <tbody>
                @for ($i = 0; $i <= 10; $i++)
                    <tr>
                        <td>1</td>
                        <td>Cristofer</td>
                        <td>San Bartolo #148b</td>
                        <td>cris@gmail.com</td>
                        <td>5612892010</td>
                    </tr>
                @endfor
                @for ($i = 0; $i <= 10; $i++)
                    <tr>
                        <td>1</td>
                        <td>Antonio</td>
                        <td>San Bartolo #148b</td>
                        <td>an@gmail.com</td>
                        <td>5612892010</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
