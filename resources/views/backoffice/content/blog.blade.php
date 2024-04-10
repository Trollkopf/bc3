@extends('layouts.backoffice')

@section('title')
    Blog index
@endsection

@section('content')
    <div class="container-fluid ">
        <div class="w-100 d-flex justify-content-end  align-items-center">
            Añadir nueva entrada &nbsp; <button class="btn btn-success me-4"><i class="bi bi-plus-square"></i></button>
        </div>
        <div class="table-responsive m-4">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th class="col-7" scope="col">T&iacute;tulo</th>
                        <th class="col-2" scope="col">Fecha de publicaci&oacute;n</th>
                        <th class="col-3" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>
                            <a href="#" class="btn btn-warning mx-2"><i class="fs-4 bi-pencil-square"></i></a>
                            <a href="#"class="btn btn-info mx-2"><i class="fs-4 bi-eye"></i></a>
                            <a href="#"class="btn btn-danger mx-2"><i class="fs-4 bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>
@endsection
