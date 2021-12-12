@extends('layouts.app')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Administrar conceptos</li>
        </ol>
    </nav>
    <ul class="nav nav-tabs d-none" id="myTab">
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
                @foreach ($conceptos as $c)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card cursor-pointer border" aria-label="{{ $c->Codigo }}">
                            <div class="card-body">
                                <span class="d-block font-500">{{ $c->Codigo }}</span>
                                <span>{{ $c->Descripcion }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane fade" id="detalle">
            <div><p class="font-500"></p></div>
            <form class="row" id="formConcepto" method="POST" action="{{ route('concepto.store') }}">
                @csrf
                <input type="hidden" name="codigo">
                <div class="col-12">
                    <div class="d-flex justify-content-between py-2">
                        <button type="button" class="btn btn-light btn-icon-text mr-3" id="back">
                            <i class="icon" data-feather="corner-up-left"></i>Regresar
                        </button>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="icon" data-feather="save"></i>Guardar
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="list-group list-group-flush"></ul>
                </div>
            </form>
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="/assets/vendors/sweetalert2/sweetalert2.min.css">
    @endpush
    @push('js')
        <script src="../js/concepto.js"></script>
        <script src="/assets/vendors/sweetalert2/sweetalert2.min.js"></script>
        <script src="/assets/js/sweet-alert.js"></script>
    @endpush
@endsection
