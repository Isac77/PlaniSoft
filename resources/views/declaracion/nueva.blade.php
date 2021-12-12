@extends('layouts.app')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nueva declaración</li>
    </ol>
</nav>
<section class="card">
    <div class="card-body">
        <h5 class="card-title">Datos básicos de la declaración</h5>
        <div class="form-group row p-0">
            <label class="col-sm-3 col-form-label mb-0">RUC:</label>
            <span class="col-sm">12345678901</span>
        </div>
        <div class="form-group row p-0">
            <label class="col-sm-3 col-form-label mb-0">Nombre / Razón Social:</label>
            <span class="col-sm">12345678901</span>
        </div>
        <div class="form-group row p-0">
            <label class="col-sm-3 col-form-label mb-0">Periodo Tributario (mm/aaaa):</label>
            <div class="col-sm-6">
                <input type="month" class="form-control" name="periodo">
            </div>
        </div>
    </div>
</section>
@endsection