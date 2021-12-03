@extends('layouts.app')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administrar conceptos</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Lista de conceptos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile">Detalle de concepto</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-dark">Código</th>
                                            <th class="text-dark">Descripción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($conceptos as $c)
                                            <tr>
                                                <td class="py-1">{{ $c->Codigo }}</td>
                                                <td>{{ $c->Descripcion }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile">
                    Detalle
                </div>
            </div>
        </div>
    </div>
@endsection
