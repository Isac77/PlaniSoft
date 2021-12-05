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
            <h6 class="card-title">Registro del Empleador</h6>
            <form class="forms-sample" method="POST" action="{{ route('empleador.update', $empleador->RUC) }}">
                @csrf
                {{ method_field('PATCH') }}
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
                                            <option value="{{ $m->codigo }}"
                                                {{ $m->codigo === $empleador->TipoEmpleador ? 'selected' : '' }}>
                                                {{ $m->descripcion }}
                                            </option>
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
                                        <input type="radio" class="form-check-input" name="SENATI" value="1"
                                        {{ $empleador->SENATI ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="SENATI" value="0" 
                                        {{ $empleador->SENATI ? '' : 'checked' }}>No
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
                                        <option value="{{ $c->Codigo }}"
                                            {{ $c->Codigo === $empleador->CodTel ? 'selected' : '' }}>
                                            {{ $c->Codigo . ' : ' . $c->Descripcion }}
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
                                <input type="tel" class="form-control" name="Telefono" value="{{ $empleador->Telefono }}">
                                @error('Telefono')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row p-0">
                            <label class="col-sm col-form-label">Correo eléctronico</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="Correo" value="{{ $empleador->Correo }}">
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
                                        <input type="radio" class="form-check-input" name="REMYPE" value="1" 
                                        {{ $empleador->REMYPE ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="REMYPE" value="0" 
                                        {{ $empleador->REMYPE ? '' : 'checked' }}>No
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
                                        <input type="radio" class="form-check-input" name="TSRPensionario" value="1"
                                        {{ $empleador->TSRPensionario ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="TSRPensionario" value="0"
                                        {{ $empleador->TSRPensionario ? '' : 'checked' }}>No
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
                                            <option value="{{ $m->codigo }}"
                                                {{ $m->codigo === $empleador->Dedicaa ? 'selected' : '' }}>
                                                {{ $m->descripcion }}
                                            </option>
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
                                        <input type="radio" class="form-check-input" name="SCTR" value="1"
                                        {{ $empleador->SCTR ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="SCTR" value="0"
                                        {{ $empleador->SCTR ? '' : 'checked' }}>No
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
                                        <input type="radio" class="form-check-input" name="PerDiscapacidad" value="1"
                                        {{ $empleador->PerDiscapacidad ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="PerDiscapacidad" value="0"
                                        {{ $empleador->PerDiscapacidad ? '' : 'checked' }}>No
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
                                        <input type="radio" class="form-check-input" name="AgenPrivEmpleo" value="1"
                                        {{ $empleador->AgenPrivEmpleo ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="AgenPrivEmpleo" value="0"
                                        {{ $empleador->AgenPrivEmpleo ? '' : 'checked' }}>No
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
                                        <input type="radio" class="form-check-input" name="DestacaDesplaza" value="1"
                                        {{ $empleador->DestacaDesplaza ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="DestacaDesplaza" value="0"
                                        {{ $empleador->DestacaDesplaza ? '' : 'checked' }}>No
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
                                            value="1" {{ $empleador->TerDestacaDesplaza ? 'checked' : '' }}>Si
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="TerDestacaDesplaza"
                                            value="0" {{ $empleador->TerDestacaDesplaza ? '' : 'checked' }}>No
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <button type="submit" class="btn btn-success btn-icon-text">
                        <i class="icon" data-feather="save"></i>
                        &nbsp;Actualizar
                    </button>
                    <a href="/empleador" class="btn btn-light btn-icon-text ml-2">
                        <i class="icon" data-feather="rotate-cw"></i>
                        &nbsp;Regresar
                    </a>
                </div>
            </form>
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
