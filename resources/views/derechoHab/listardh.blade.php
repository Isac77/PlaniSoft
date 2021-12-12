@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Identificación del Titular</h6>

                    <div class="form-group row">
                        <label for="titular" class="col-sm-3 col-form-label">Titular</label>
                        <div class="col-sm-5">
                            <select class="select_busqueda w-100" name="titular" id="titular">
                                <option disabled selected value="SS">Seleccionar Titular</option>
                                @foreach($trab as $item)
                                    <option value="{{$item->IdTrab}}">{{$item->ApellidoP}} {{$item->ApellidoM}} {{$item->Nombres}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tipo y Número de Documento de Identidad</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="tipo_doc_trab" placeholder="DNI / PASAPORTE" disabled>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="nro_doc_trab" placeholder="97846521 - 54" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-3 col-form-label">Apellidos</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="apellidos" autocomplete="off" placeholder="APELLIDOS" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-3 col-form-label">Nombres</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="apellidos" autocomplete="off" placeholder="NOMBRES" disabled>
                        </div>
                    </div>

                    <h6 class="card-title">Derecho Habientes Registrados</h6>
                    <a role="button" href="{{route('derechohab.registrardh')}}" class="btn btn-outline-primary btn-icon-text float-right" id="add-dh" >
                        <i class="btn-icon-prepend" data-feather="file-plus"></i>
                        AÑADIR DERECHO HABIENTE
                    </a>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Nombres</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Tipo de Vínculo</th>
                                    <th>Situación</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dhs as $item)
                                    <tr>
                                        <th>{{$item->CodTipoDoc}} - {{$item->NroDoc}}</th>
                                        <td>{{$item->ApellidoP}}</td>
                                        <td>{{$item->ApellidoM}}</td>
                                        <td>{{$item->Nombres}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->FechaNac)->format('d/m/Y')}}</td>
                                        <th>{{$item->Abreviatura}}</th>
                                        <th class="text text-success">{{$item->Situacion}}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('css')
    {{--        Select 2--}}
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">
    {{-- Styles for this page        --}}
    <link rel="stylesheet" href="../assets/css/listarDH.css">
@endpush
    @push('js')

    {{--        Select 2--}}
    <script src="../assets/vendors/select2/select2.min.js"></script>

    {{-- Methods of this Page   --}}
    <script src="../assets/js/listarDH.js"></script>
    @endpush
@endsection
