@extends('layouts.app')
@section('content')
    {{--<nav class="page-breadcrumb" id="navTrab">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trabajador</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo Trabajador</li>
        </ol>
    </nav>--}}
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-1">Registro de Trabajadores, Pensionistas y Otros Prestadores de Servicios</h4>
                    <div class="progress mb-3 mr-2">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="workerProgress">0%</div>
                    </div>
                    <div id="wizard-Worker">
                        <h2>Datos de Identificación</h2>

                        <section>
                            <h6 class="card-title">Datos Generales</h6>
                            <form>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="tipo_doc">Tipo Doc</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_doc" id="tipo_doc">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($tipo_doc as $doc)
                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="nro_doc">Nro. Doc</label>
                                            <input type="number" class="form-control form-control-sm" placeholder="87654321" name="nro_doc" id="nro_doc">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label"><code>.RENIEC-SUNAT</code></label>
                                            <a href="#" class="btn btn-primary btn-icon-text form-control form-control-sm" id="reniec_sunat">
                                                Buscar
                                                <i class="btn-icon-append" data-feather="search"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="apaterno">Apellido Paterno</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="FERNANDEZ" name="apaterno" id="apaterno" value="">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="amaterno">Apellido Materno</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="SUAREZ" name="amaterno" id="amaterno">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="nombres">Nombres</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="KATERIN LUNA" name="nombres" id="nombres">
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="fecha-nac_trab">Fecha Nacimiento <code>dd/mm/aaaa</code></label>
                                            <div class="input-group date datepicker" id="fecha-nac">
                                                <input type="text" class="form-control form-control-sm" name="fecha-nac_trab" id="fecha-nac_trab"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="pais_emisor">Pais Emisor Doc.</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="pais_emisor" id="pais_emisor">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($paisPasaporte as $item)
                                                    <option value="{{$item->Codigo}}">{{$item->Codigo}} - {{$item->Descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="sexo">Sexo</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="sexo" id="sexo">
                                                <option disabled selected>SELECCIONAR</option>
                                                <option value="F">FEMENINO</option>
                                                <option value="M">MASCULINO</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="estado_civil">Estado Civil</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="estado_civil" id="estado_civil">
                                                <option disabled selected>SELECCIONAR</option>
                                                <<option value="SOLTERO">SOLTERO</option>
                                                <option value="CASADO">CASADO</option>
                                                <option value="VIUDO">VIUDO</option>
                                                <option value="DOVORCIADO">DOVORCIADO</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="nacionalidad">Nacionalidad</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="nacionalidad" id="nacionalidad">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($nacionalidad as $item)
                                                    <option value="{{$item->Nro}}">{{$item->Nro}} - {{$item->Descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="cod_phone">Cod. Teléfono</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="cod_phone" id="cod_phone">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($codTelefono as $item)
                                                    <option value="{{$item->Codigo}}">{{$item->Codigo}} - {{$item->Descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="telefono">Telefono</label>
                                            <input type="number" class="form-control form-control-sm" placeholder="87654321" name="telefono" id="telefono">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="correo">Dirección de Correo</label>
                                            <input type="email" class="form-control form-control-sm" placeholder="luna_estrella@icloud.com" name="correo" id="correo">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label" for="direccion1">Primera Dirección</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="URB. LOS PINOS LTE. 5 MZ U" name="direccion1" id="direccion1">
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-2" id="sec-dir">
                                        <div class="form-group">
                                            <label class="control-label">Segunda Direccion</label>
                                            <button type="button" class="btn btn-primary btn-icon-text form-control form-control-sm" id="second-address" data-toggle="modal" data-target="#staticBackdrop" onclick="showSwal('message-with-auto-close')">
                                                Detallar
                                                <i class="btn-icon-append" data-feather="plus-square"></i>
                                            </button>

                                            <!-- Large modal -->

                                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text text-center" id="staticBackdropLabel">SEGUNDA DIRECCIÓN</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h6 class="card-title">DETALLES DE DIRECCIÓN ALTERNATIVA</h6>
                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="departamento">Departamento</label>
                                                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="departamento" id="departamento">
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="provincia">Provincia</label>
                                                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="provincia" id="provincia" disabled>
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="distrito"><code>UBIGEO</code> - Distrito</label>
                                                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="distrito" id="distrito" disabled>
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                </div><!-- Row -->
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="tipo_via">Tipo de Vía</label>
                                                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_via" id="tipo_via">
                                                                                <option disabled selected>SELECCIONAR</option>

                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="nombre_via">Nombre de Vía</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="PANAMERICANA" name="nombre_via" id="nombre_via">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="nro_via">Número</label>
                                                                            <input type="number" class="form-control form-control-sm" placeholder="1475" name="nro_via" id="nro_via">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="dpto">Dpto</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="4" name="dpto" id="dpto">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="interior">Interior</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="5B" name="interior" id="interior">
                                                                        </div>
                                                                    </div><!-- Col -->

                                                                </div><!-- Row -->
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="tipo_zona">Tipo de Zona</label>
                                                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_zona" id="tipo_zona">
                                                                                <option disabled selected>SELECCIONAR</option>

                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="nombre_zona">Nombre Zona</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="SECTOR 7" name="nombre_zona" id="nombre_zona">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="manzana">Manzana</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="K" name="manzana" id="manzana">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="lote">Lote</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="5" name="lote" id="lote">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="km">Km</label>
                                                                            <input type="number" class="form-control form-control-sm" placeholder="15" name="km" id="km">
                                                                        </div>
                                                                    </div><!-- Col -->

                                                                </div><!-- Row -->

                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="bloque">Bloque</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="2C" name="bloque" id="bloque">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="etapa">Etapa</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="PRIMERA" name="etapa" id="etapa">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-7">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="referencia">Referencia</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="DOS CUADRAS PARQUE LAS PALMERAS" name="referencia" id="referencia">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                </div><!-- Row -->

                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="ref_cen_salud">Ref. Centro Asistencial de EsSalud</label>
                                                                            <br>
                                                                            <div class="form-check form-check-inline">
                                                                                <label class="form-check-label">
                                                                                    <input type="radio" class="form-check-input" name="ref_salud" id="si-ref-essalud" value="true">
                                                                                    Sí
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <label class="form-check-label">
                                                                                    <input type="radio" class="form-check-input" name="ref_salud" id="no-ref-essalud" value="false">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-8" id="ref-EsSalud">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="ref_salud">Referencia Centro de EsSalud</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="DOS CUADRAS PARQUE LAS PALMERAS" name="ref_salud" id="ref_salud">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                </div><!-- Row -->

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary col-sm-3 btn-icon-text" data-dismiss="modal">
                                                                <i class="btn-icon-prepend" data-feather="corner-up-left"></i>
                                                                Cancelar
                                                            </button>
                                                            <button type="button" class="btn btn-primary col-sm-3 btn-icon-text" id="modal-address" data-dismiss="modal">
                                                                Guardar
                                                                <i class="btn-icon-append" data-feather="check-circle"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="quitar-dir">
                                        <div class="form-group">
                                            <label class="control-label">Segunda Direccion</label>
                                            <a href="#" class="btn btn-danger btn-icon-text form-control form-control-sm" id="quitar-address">
                                                Quitar
                                                <i class="btn-icon-append" data-feather="delete"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-5" id="campo-dir">
                                        <div class="form-group">
                                            <label class="control-label" for="direccion2">Detalle Segunda Dirección</label>
                                            <input type="text" class="form-control form-control-sm" placeholder="URB. LOS PINOS LTE. 5 MZ U" name="direccion2" id="direccion2">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="cat_trab">Categoria Trabajador</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="cat_trab" id="cat_trab">
                                                <option disabled selected>SELECCIONAR</option>
                                                <option value="TBN">TRABAJADOR</option>
                                                <option value="PEN">PENSIONISTA</option>
                                                <option value="PEF">PERSONAL EN FORMACIÓN</option>
                                                <option value="TPT">PERSONAL POR TERCEROS</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right"  id="saveDI_Trab">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>
                        </section>

                        <h2>Datos Laborales</h2>
                        <section>

                            <form>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h6 class="card-title">PERIODO LABORAL</h6>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="fi_lab">Fecha Inicio <code>dd/mm/aaa</code></label>
                                                    <div class="input-group date datepicker" id="fecha-inicio-lab">
                                                        <input type="text" class="form-control form-control-sm" name="fi_lab" id="fi_lab"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="ff_lab">Fecha Fin <code>dd/mm/aaa</code></label>
                                                    <div class="input-group date datepicker" id="fecha-fin-lab">
                                                        <input type="text" class="form-control form-control-sm" name="ff_lab" id="ff_lab"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="mot_baja_registro">Motivo Baja Registro</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="mot_baja_registro" id="mot_baja_registro">
                                                        <option disabled selected value="NN">SELECCIONAR</option>
                                                        @foreach($motBaja as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                        </div><!-- Row -->

                                        <h6 class="card-title">TIPO DE TRABAJADOR</h6>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="tipo_trabajador">Tipo Trabajador</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_trabajador" id="tipo_trabajador">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($tipoTrab as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="fi_trab">Fecha Inicio <code>dd/mm/aaa</code></label>
                                                    <div class="input-group date datepicker" id="fecha-inicio">
                                                        <input type="text" class="form-control form-control-sm" name="fi_trab" id="fi_trab"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="ff_trab">Fecha Fin <code>dd/mm/aaa</code></label>
                                                    <div class="input-group date datepicker" id="fecha-fin">
                                                        <input type="text" class="form-control form-control-sm" name="ff_trab" id="ff_trab"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div><!-- Col -->
                                        </div><!-- Row -->

                                        <h6 class="card-title">OTROS</h6>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <label class="control-label" for="reg_lab">Régimen Laboral</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="reg_lab" id="reg_lab">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($regLaboral as $item)
                                                            <option value="{{$item->Codigo}}">{{$item->Descripcion}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label class="control-label" for="cat_ocupacional">Categoria Ocupacional</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="cat_ocupacional" id="cat_ocupacional">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($catOcuTrab as $item)
                                                            <option value="{{$item->Codigo}}">{{$item->Descripcion}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                        </div><!-- Row -->

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="nivel_educativo">Nivel Educativo</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="nivel_educativo" id="nivel_educativo">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($sitEdu as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="ocupacion">Ocupación</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="ocupacion" id="ocupacion" disabled>
                                                        <option disabled selected>SELECCIONAR</option>
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <label class="control-label" for="codigo">Código</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="013003" name="codigo" id="codigo">
                                                </div>
                                            </div><!-- Col -->
                                        </div><!-- Row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="tipo_contrato">Tipo Contrato</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_contrato" id="tipo_contrato">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($tipoContrato as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="tipo_pago">Tipo Pago</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_pago" id="tipo_pago">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($tipoPago as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Descripcion}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label" for="per_pago">Periodo Pago</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="per_pago" id="per_pago">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($perPago as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Descripcion}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                        </div><!-- Row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="pago_inicial">Monto de remuneración Básica Inicial</label>
                                                    <input type="number" class="form-control form-control-sm" placeholder="3200" name="pago_inicial" id="pago_inicial">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="card-title">LUGAR TRABAJO</h6>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="est_trab">Establecimiento Donde Labora</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="SUCURSAL PACASMAYO" name="est_trab" id="est_trab">
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="control-label" for="local">Local</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="ALMACEN #1" name="local" id="local">
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="cod_local">Cód. Local</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="125645" name="cod_local" id="cod_local">
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label class="control-label" for="jornada_laboral">Jornada Laboral</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="jornada_laboral" id="jornada_laboral">
                                                        <option selected disabled>SELECCIONAR</option>
                                                        <option value="JM">JORNADA TRABAJO MÁXIMA</option>
                                                        <option value="JA">JORNADA ATÍPICA O ACUMULATIVA</option>
                                                        <option value="JN">TRABAJO EN HORARIO NOCTURNO</option>
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-4" id="part-time">
                                                <div class="form-group">
                                                    <label class="control-label" for="horas_trab">Hs x Día</label>
                                                    <input type="text" class="form-control form-control-sm" placeholder="0" name="horas_trab" id="horas_trab">
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="sit_especial">Situación Especial</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="sit_especial" id="sit_especial">
                                                        <option selected disabled>SELECCIONAR</option>
                                                        <option value="TD">TRABAJADOR DE DIRECCIÓN</option>
                                                        <option value="TC">TRABAJADOR DE CONFIANZA</option>
                                                        <option value="NN">NINGUNA</option>
                                                    </select>

                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="sit_especial_det">Detalle</label>
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="sit_especial_det" id="sit_especial_det" disabled>
                                                        <option disabled selected>SELECCIONAR</option>
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="discapacitado">¿Discapacitado?</label>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="discapacitado" id="discapacitado_si" value="si">
                                                            Sí
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="discapacitado" id="discapacitado_no" value="no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="sindicalizado">¿Sindicalizado?</label>
                                                    <br>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="sindicalizado" id="sindicalizado_si" value="si">
                                                            Sí
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="sindicalizado" id="sindicalizado_no" value="no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div><!-- Col -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="sit_trab">Situación del Trabajador</label>
{{--                                                    <input type="text" disabled class="form-control form-control-sm" value="ACTIVO" id="sit_trab" name="sit_trab" >--}}
                                                    <select class="select-busqueda w-100 form-control form-control-sm mb-3" id="sit_trab" name="sit_trab">
                                                        <option disabled selected>SELECCIONAR</option>
                                                        @foreach($sitEstadoTrab as $item)
                                                            <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><!-- Col -->
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right" id="saveDL">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>

                        </section>
                        <h2>Situación Educativa</h2>
                        <section>
                            <h6 class="card-title">La Situación Educativa que deberá consignar es la de <code>mayor nivel alcanzado por el trabajador</code></h6>
                            <form>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label" for="sit_educativa">Situación Educativa</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="sit_educativa" id="sit_educativa">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($sitEdu as $item)
                                                    <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->

                                <h6 class="card-title">Para la Situación Educativa elegida, deberá indicarse como formación superior completa el tipo <code>"Educación Unversitaria Completa"</code></h6>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Relación de Estudios Concluidos</h6>
                                                <button type="button" class="btn  btn-outline-primary btn-icon-text float-right" id="add_info_du" data-toggle="modal" data-target="#modalEdu">
                                                    <i class="btn-icon-prepend" data-feather="file-plus"></i>
                                                    ADICIONAR INFORMACIÓN
                                                </button>

{{--                                                MODAL--}}
                                            <!-- Large modal -->

                                                <div class="modal fade" id="modalEdu" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title text text-center" id="staticBackdropLabel">DETALLES DE ESTUDIOS CONCLUIDOS</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6 class="card-title">Sólo puede incluir hasta 05 registros por cada tipo de formación superior completa <code>(Educación Universitaria completa o Educación Superior Completa).</code> De requerir ingresar más información, considere el estudio concluido más actual </h6>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="sit_educativa_modal">Formación Superior Completa</label>
                                                                                <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="sit_educativa_modal" id="sit_educativa_modal">
                                                                                    <option disabled selected>SELECCIONAR</option>
                                                                                </select>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="unv_peru">¿Estudió en una Institución Educativa del Perú?</label>
                                                                                <br>
                                                                                <div class="form-check form-check-inline">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio" class="form-check-input" name="unv_peru" id="unv_peru_si" value="SI" checked>
                                                                                        Sí
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio" class="form-check-input" name="unv_peru" id="unv_peru_no" value="NO">
                                                                                        No
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                        <div class="col-sm-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="reg_inst">Régimen de la Institución Educativa</label>
                                                                                <br>
                                                                                <div class="form-check form-check-inline">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio" class="form-check-input" name="reg_inst" id="reg_inst_publica" value="1">
                                                                                        PÚBLICA
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <label class="form-check-label">
                                                                                        <input type="radio" class="form-check-input" name="reg_inst" id="reg_inst_privada" value="2">
                                                                                        PRIVADA
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="tipo_inst">Tipo de Institución Educativa</label>
                                                                                <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="tipo_inst" id="tipo_inst" disabled>
                                                                                    <option disabled selected>SELECCIONAR</option>
                                                                                </select>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="name_inst">Nombre de la Institución Educativa</label>
                                                                                <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="name_inst" id="name_inst" disabled>
                                                                                    <option disabled selected>SELECCIONAR</option>
                                                                                </select>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                        <div class="col-sm-8">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="carrera">Carrera</label>
                                                                                <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="carrera" id="carrera" disabled>
                                                                                    <option disabled selected>SELECCIONAR</option>
                                                                                </select>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label class="control-label" for="año_egreso">Año de Egreso</label>
                                                                                <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="año_egreso" id="año_egreso" disabled>
                                                                                    <option disabled selected>SELECCIONAR</option>
                                                                                </select>
                                                                            </div>
                                                                        </div><!-- Col -->
                                                                    </div><!-- Row -->

                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-icon-text col-sm-3" data-dismiss="modal" >
                                                                    <i class="btn-icon-prepend" data-feather="corner-up-left"></i>
                                                                    Cancelar
                                                                </button>
                                                                <button type="button" class="btn btn-primary btn-icon-text col-sm-3" id="addInfoEstudios" data-dismiss="modal" >
                                                                    Aceptar
                                                                    <i class="btn-icon-append" data-feather="check-circle"></i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
{{--                                                END MODAL--}}

                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Estudios en el Perú</th>
                                                                <th>Tipo Institución</th>
                                                                <th>Régimen</th>
                                                                <th>Nombre Institución</th>
                                                                <th>Carrera</th>
                                                                <th>Año de Egreso</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="content_Estudios">

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                            </form>
                            <br>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>


                        </section>
                        <h2>Datos de Seguridad Social</h2>
                        <section>
                            <h6 class="card-title">Régimen de Salud</h6>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="reg_salud">Régimen de Salud</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="reg_salud" id="reg_salud">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($reg_salud as $item)
                                                    <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="fi_reg_salud">Fecha Inicio <code>(mm/dd/aaaa)</code></label>
                                            <input type="date"  class="form-control form-control-sm" name="fi_reg_salud"  id="fi_reg_salud">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="ff_reg_salud">Fecha Fin <code>(mm/dd/aaaa)</code></label>
                                            <input type="date"  class="form-control form-control-sm" name="ff_reg_salud" id="ff_reg_salud">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div-btn-deatil-reg-salud">
                                        <div class="form-group">
                                            <label class="control-label"><code>.Detallar</code></label>
                                            <a href="#"  class="btn btn-info btn-icon-text form-control form-control-sm" id="btn-detail-reg-salud">
                                                Detalle
                                                <i class="btn-icon-append" data-feather="pocket"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="quitar-detail-reg-salud">
                                        <div class="form-group">
                                            <label class="control-label"><code>.Quitar</code></label>
                                            <a href="#"  class="btn btn-danger btn-icon-text form-control form-control-sm" id="btn-quit-detail-reg-salud">
                                                Quitar Detalle
                                                <i class="btn-icon-append" data-feather="delete"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4" id="detail-reg-salud">
                                        <div class="form-group">
                                            <label class="control-label" for="det_reg_salud">Detalle Reg. de Salud</label>
                                            <input type="text"  class="form-control form-control-sm ff-fecha" placeholder="SOMETHING" name="det_reg_salud"  id="det_reg_salud">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row-->

                                <h6 class="card-title">Tipos de Seguros</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" >¿Aporta al SCRT?</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="scrt" id="scrt_si" value="SI">
                                                    Sí
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="scrt" id="scrt_no" value="NO" checked>
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Cobertura Pensión </label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="cob_pension" id="cob_pension_si" value="SI">
                                                    ONP
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="cob_pension" id="cob_pension_no" value="NO">
                                                    Seguro Privado <code>(AFPs)</code>
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label">Cobertura Salud </label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="cob_salud" id="cob_salud_si" value="SI">
                                                    EsSalud
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="cob_salud" id="cob_salud_no" value="NO">
                                                    EPS
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="fi_cob_salud">Fecha Inicio <code>(mm/dd/aaaa)</code></label>
                                            <input type="date"  class="form-control form-control-sm ff-fecha" name="fi_cob_salud"  id="fi_cob_salud">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="ff_cob_salud">Fecha Fin <code>(mm/dd/aaaa)</code></label>
                                            <input type="date"  class="form-control form-control-sm ff-fecha" name="ff_cob_salud"  id="ff_cob_salud">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div-btn-add-reg-os">
                                        <div class="form-group">
                                            <label class="control-label"><code>.Detallar</code></label>
                                            <a href="#"  class="btn btn-info btn-icon-text form-control form-control-sm" id="btn-add-reg-os">
                                                Detalle
                                                <i class="btn-icon-append" data-feather="pocket"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div-quit-detail-reg-os">
                                        <div class="form-group">
                                            <label class="control-label"><code>.Quitar</code></label>
                                            <a href="#"  class="btn btn-danger btn-icon-text form-control form-control-sm" id="btn-quit-deatil-reg-os">
                                                Quitar Detalle
                                                <i class="btn-icon-append" data-feather="delete"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4" id="div-detail-reg-os">
                                        <div class="form-group">
                                            <label class="control-label">Detalle Otros Seguros </label>
                                            <input type="text"  class="form-control form-control-sm ff-fecha" placeholder="AF54AFASDFA"  id="">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row-->

                                <h6 class="card-title">Régimen Pensionario</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="reg_pen">Régimen Pensionario</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="reg_pen" id="reg_pen">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($reg_pensionario as $item)
                                                    <option value="{{$item->Nro}}">{{$item->Descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div_cuspp">
                                        <div class="form-group">
                                            <label class="control-label" for="cuspp">CUSPP </label>
                                            <input type="text"  class="form-control form-control-sm ff-fecha" placeholder="AF54AFASDFA" name="cuspp"  id="cuspp">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4" id="div_web_sbs">
                                        <div class="form-group">
                                            <label class="control-label">Obtenga el CUSPP Accediente a la página<code>.WEB-SBS</code></label>
                                            <a href="{{URL('https://servicios.sbs.gob.pe/ReporteSituacionPrevisional/Afil_Consulta.aspx')}}" target="_blank" class="btn btn-primary btn-icon-text form-control form-control-sm">
                                                WEB SBS
                                                <i class="btn-icon-append" data-feather="external-link"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="fi_reg_pen">Fecha Inicio <code>(mm/dd/aaaa)</code></label>
                                            <input type="date"  class="form-control form-control-sm ff-fecha" name="fi_reg_pen"  id="fi_reg_pen">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="ff_reg_pen">Fecha Fin <code>(mm/dd/aaaa)</code></label>
                                            <input type="date"  class="form-control form-control-sm ff-fecha" name="ff_reg_pen"  id="ff_reg_pen">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div-btn-add-reg-pen">
                                        <div class="form-group">
                                            <label class="control-label"><code>.Detallar</code></label>
                                            <a href="#"  class="btn btn-info btn-icon-text form-control form-control-sm" id="btn-add-reg-pen">
                                                Detalle
                                                <i class="btn-icon-append" data-feather="pocket"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div-quit-detail-reg-pen">
                                        <div class="form-group">
                                            <label class="control-label"><code>.Quitar</code></label>
                                            <a href="#"  class="btn btn-danger btn-icon-text form-control form-control-sm" id="btn-quit-deatil-reg-pen">
                                                Quitar Detalle
                                                <i class="btn-icon-append" data-feather="delete"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4" id="div-detail-reg-pen">
                                        <div class="form-group">
                                            <label class="control-label">Detalle Reg. Pensionario </label>
                                            <input type="text"  class="form-control form-control-sm ff-fecha" placeholder="AF54AFASDFA"  id="">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row-->

                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>


                        </section>

                        <h2>Datos Tributarios</h2>
                        <section>
                            <h6 class="card-title">¿Percibe Renta de <code>5ta Categoria</code> exoneradas (Inc. e) Art. 19 de la LIR?</h6>

                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Renta 5ta Categoria</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="renta5" id="renta5_si" value="SI">
                                                    Sí
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="renta5" id="renta5_no" value="NO" checked>
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->

                                <h6 class="card-title">OTROS REFERIDOS A LA TRIBUTACIÓN</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">¿Aplica Convenio para evitar doble Imposición?</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="convenio" id="convenio_si" value="SI">
                                                    Sí
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="convenio" id="convenio_no" value="NO" checked>
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label" for="convenio_pais">Convenio</label>
                                            <select class="select-busqueda w-100 form-control form-control-sm mb-3" name="convenio_pais" id="convenio_pais">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($convenio as $item)
                                                    <option value="{{$item->Codigo}}">{{$item->Descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right" id="finishTrab">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>

                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('css')
        {{--        Select 2--}}
        <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">
        {{--        Wizard --}}
        <link rel="stylesheet" href="../assets/vendors/jquery-steps/jquery.steps.css">

        {{--     Date Time Picker   --}}
        <link rel="stylesheet" href="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

        {{--    Sweet Alert 2        --}}
        <link rel="stylesheet" href="../../../assets/vendors/sweetalert2/sweetalert2.min.css">

        {{-- Styles for this page        --}}
        <link rel="stylesheet" href="../assets/css/workerStyles.css">
    @endpush
    @push('js').
        {{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}


        {{--        Select 2--}}
        <script src="../assets/vendors/select2/select2.min.js"></script>


        {{--        Wizard --}}
        <script src="../assets/vendors/jquery-steps/jquery.steps.min.js"></script>
        <script src="../assets/js/wizard.js"></script>

        {{--     Date Time Picker   --}}
        <script src="../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="../assets/js/datepicker.js"></script>

        {{--    Sweet Alert 2        --}}
        <script src="../../../assets/vendors/sweetalert2/sweetalert2.min.js"></script>

        {{-- Methods of this Page   --}}
        <script src="../assets/js/workerCreate.js"></script>
    @endpush
@endsection
