@extends('layouts.backoffice')

@section('title')
    Listado de p&aacute;ginas
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-hover table-white align-middle">
            <thead class="table-dark">
                <tr>
                    <th class="col-10">P&aacute;gina</th>
                    <th class="col-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td scope="row">Home</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="{{ route('welcome') }}"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Historia</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Por qu&eacute;</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Cocinas cl&aacute;sicas</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Cocinas modernas</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Contacto | Clientes</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Contacto | Distribuidores</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">Contacto | Delegaciones</td>
                    <td>
                        <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                        <a href="#"class="btn btn-info"><i class="fs-4 bi-eye"></i></a>
                    </td>
                </tr>
        </table>
    </div>
@endsection
