@extends('layouts.app')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Empleador</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            @if (!$empleador)
                <h6 class="card-title">Registro del Empleador</h6>
                <form class="forms-sample" method="POST" action="{{ route('empleador.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <h6 class="card-title text-primary font-13"><i data-feather="minus"></i> Datos del Empleador
                            </h6>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label">Tipo de empleador:</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="TipoEmpleador">
                                        <option selected disabled value="">-- Seleccionar --</option>
                                        @foreach ($multinivel as $m)
                                            @if ($m->entidad === 'EMP1')
                                                <option value="{{ $m->codigo }}">{{ $m->descripcion }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('TipoEmpleador')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label">¿Está obligado a aportar al SENATI?</label>
                                <div class="col-sm-6 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="SENATI" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="SENATI" value="0" checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label">Código de ciudad</label>
                                <div class="col-sm-6">
                                    <select class="js-example-basic-single w-100" name="CodTel">
                                        <option selected disabled value="">-- Seleccionar --</option>
                                        @foreach ($codtel as $c)
                                            <option value="{{ $c->Codigo }}">{{ $c->Codigo . ' : ' . $c->Descripcion }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('CodTel')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label">Teléfono</label>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control" name="Telefono">
                                    @error('Telefono')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label">Correo eléctronico</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="Correo">
                                    @error('Correo')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md">
                            <h6 class="card-title text-primary font-13">
                                <i data-feather="minus"></i> Datos Laborales y de Seguridad Social
                            </h6>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Es una empresa inscrita en el
                                    REMYPE?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="REMYPE" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="REMYPE" value="0" checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Tiene trabajadores sin régimen
                                    pensionario?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="TSRPensionario" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="TSRPensionario" value="0"
                                                checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">La empresa se dedica a:</label>
                                <div class="col-sm-5 d-flex justify-content-end">
                                    <select class="form-control" name="Dedicaa">
                                        <option selected disabled value="">-- Seleccionar --</option>
                                        @foreach ($multinivel as $m)
                                            @if ($m->entidad === 'EMP2')
                                                <option value="{{ $m->codigo }}">{{ $m->descripcion }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('Dedicaa')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Desarrolla actividades de riesgo
                                    SCTR?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="SCTR" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="SCTR" value="0" checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Es una Empresa Promocional de personas
                                    con
                                    discapacidad?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="PerDiscapacidad" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="PerDiscapacidad" value="0"
                                                checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Es una Agencia Privada de
                                    Empleos?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="AgenPrivEmpleo" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="AgenPrivEmpleo" value="0"
                                                checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Destaca o desplaza personal a otros
                                    empleadores?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="DestacaDesplaza" value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="DestacaDesplaza" value="0"
                                                checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row p-0">
                                <label class="col-sm col-form-label text-truncate">¿Terceros Empleadores le destacan o
                                    desplazan
                                    personal?</label>
                                <div class="col-sm-4 d-flex justify-content-end">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="TerDestacaDesplaza"
                                                value="1">Si
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="TerDestacaDesplaza"
                                                value="0" checked>No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            <i class="icon" data-feather="save"></i>
                            Guardar
                        </button>
                        <button type="reset" class="btn btn-light btn-icon-text ml-3">
                            <i class="icon" data-feather="x-circle"></i>
                            Cancelar
                        </button>
                    </div>
                </form>
            @else
                <h6 class="card-title">Información del Empleador</h6>
                <div class="row">
                    <div class="col-lg-6">
                        <h6 class="card-title text-primary font-13"><i data-feather="minus"></i> Datos del Empleador</h6>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">RUC:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $empleador->RUC }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Razón social:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $empleador->RazonSocial }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Tipo de empleador:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $empleador->TipoEmpleador }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Aporta al SENATI:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $empleador->SENATI ? 'SI' : 'NO' }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Teléfono:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"
                                    value="{{ '+' . $empleador->CodTel . ' ' . $empleador->Telefono }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Correo eléctronico:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" value="{{ $empleador->Correo }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="card-title text-primary font-13"><i data-feather="minus"></i> Datos Laborales y de
                            Seguridad
                            Social</h6>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Está inscrita en el REMYPE:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{ $empleador->REMYPE ? 'SI' : 'NO' }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">¿Tiene trabajadores sin régimen pensionario?</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control"
                                    value="{{ $empleador->TSRPensionario ? 'SI' : 'NO' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">La empresa se dedica a:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{ $empleador->Dedicaa }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">¿Desarrolla actividades de riesgo SCTR?</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{ $empleador->SCTR ? 'SI' : 'NO' }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">¿Es Promocional de personas con
                                discapacidad?</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                    value="{{ $empleador->PerDiscapacidad ? 'SI' : 'NO' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">¿Es una Agencia Privada de Empleos?</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                    value="{{ $empleador->AgenPrivEmpleo ? 'SI' : 'NO' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">¿Destaca o desplaza personal a otros empleadores?</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                    value="{{ $empleador->DestacaDesplaza ? 'SI' : 'NO' }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">¿Terceros Empleadores le destacan o desplazan
                                personal?</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"
                                    value="{{ $empleador->TerDestacaDesplaza ? 'SI' : 'NO' }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <form class="d-flex justify-content-end mt-2" method="POST" action="{{ route('empleador.destroy', $empleador->RUC) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <a href="{{ route('empleador.edit', $empleador->RUC) }}" class="btn btn-primary btn-icon-text">
                        <i class="icon" data-feather="edit"></i>
                        Editar registro
                    </a>
                    <button type="submit" class="btn btn-danger btn-icon-text ml-3">
                        <i class="icon" data-feather="trash-2"></i>
                        &nbsp;Eliminar
                    </button>
                </form>
            @endif
        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="/assets/vendors/select2/select2.min.css">
    @endpush
    @push('js')
        <script src="/assets/vendors/select2/select2.min.js"></script>
        <script src="/assets/js/select2.js"></script>
    @endpush
@endsection
