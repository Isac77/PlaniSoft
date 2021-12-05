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
                    <a class="nav-link active" data-toggle="tab" href="#conceptos">Lista de conceptos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#detalle">Detalle de concepto</a>
                </li>
            </ul>
            <div class="tab-content py-2" id="myTabContent">
                <div class="tab-pane fade show active" id="conceptos">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-dark" width="10%">Código</th>
                                            <th class="text-dark">Descripción</th>
                                            <th class="text-dark" width="15%">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($conceptos as $c)
                                            <tr>
                                                <td class="py-1">{{ $c->Codigo }}</td>
                                                <td>{{ $c->Descripcion }}</td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm" aria-label="{{ $c->Codigo }}">
                                                        Ver detalle
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade py-2" id="detalle">
                    <form class="row" id="formConcepto">
                        <div class="col-12">
                            <ul class="list-group list-group-flush"></ul>
                        </div>
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary btn-icon-text">
                                <i class="icon" data-feather="save"></i>
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="../js/concepto.js"></script>
    @endpush
@endsection