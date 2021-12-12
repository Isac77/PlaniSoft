@extends('layouts.app')
@section('content')

    {{--<nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trabajador</a></li>
            <li class="breadcrumb-item active" aria-current="page">Listado Completo</li>
        </ol>
    </nav>--}}
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Trabajadores</h6>
                    <a class="btn btn-outline-primary btn-icon-text  mb-3" id="nuevoTrab" href="{{route('trabajador.nuevo')}}" role="button"><i class="btn-icon-prepend" data-feather="plus-circle"></i>Crear Nuevo Trabajador</a>
                    <p class="card-description">Se muestran los trabajadores de <a href="#"> INVERSIONES S.A.C.</a></p>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Categoria</th>
                                    <th>Documento Identidad</th>
                                    <th>Apellidos y Nombres</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Sexo</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trab as $item)
                                    <tr>
                                        <th>{{$item->CatTrabajador}}</th>
                                        <td>{{$item->CodTipoDoc}} - {{$item->NroDoc}}</td>
                                        <td>{{$item->ApellidoP}} {{$item->ApellidoM}} {{$item->Nombres}}</td>
                                        <td>{{\Carbon\Carbon::parse($item->FechaNac)->format('d/m/Y')}}</td>
                                        <td>{{$item->Sexo == 'F' ? 'FEMENINO' : 'MASCULINO'}}</td>
                                        <th class="text text-success">{{$item->Abreviatura}}</th>
                                        <td>
                                            <a role="button" href="{{route('trabajador.perfil')}}" class="btn btn-success btn-icon">
                                                <i data-feather="gitlab"></i>
                                            </a>
                                            <button type="button" class="btn btn-warning btn-icon">
                                                <i data-feather="edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-icon">
                                                <i data-feather="delete"></i>
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
    </div>

    @push('css')


        {{-- Styles for this page        --}}
        <link rel="stylesheet" href="../assets/css/workerStyles.css">
    @endpush
    @push('js').


    @endpush
@endsection
