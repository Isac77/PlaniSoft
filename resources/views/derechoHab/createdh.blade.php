@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-1">Alta de Derecho Habiente</h4>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" id="progresDH" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div id="wizardVertical-DerchoHab">
{{--                        <h2>Busqueda de Personas</h2>--}}
{{--                        <section>--}}
{{--                            <h4>Heading</h4>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis,--}}
{{--                                sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus.--}}
{{--                                Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>--}}
{{--                        </section>--}}

                        <h2>Datos de Identificación</h2>
                        <section>
                            <h6 class="card-title">Datos Generales</h6>
                            <form id="formdh">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="trabajador">Vincular a Trabajador</label>
                                            <select class="select-busqueda w-100" name="trabajador" id="trabajador">
                                                <option disabled selected>SELECCIONAR TRABAJADOR</option>
                                                <option >Juan Robles</option>
                                                <option >Elisa Paredes</option>
                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="tipo_doc_dh">Tipo de Documento de Identidad</label>
                                            <select class="select-busqueda w-100" name="tipo_doc_dh" id="tipo_doc_dh">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($tipo_doc as $doc)
                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="nro_doc_dh">Nro. Documento</label>
                                            <input type="number"  class="form-control" placeholder="87231645" name="nro_doc_dh" id="nro_doc_dh">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="fecha_nac_dh">Fecha Nacimiento <code>dd/mm/aaaa</code></label>
                                            <input type="date"  class="form-control" name="fecha_nac_dh" id="fecha_nac_dh" >
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="pais_emisor_dh">Pais Emisor Doc.</label>
                                            <select class="select-busqueda w-100" name="pais_emisor_dh" id="pais_emisor_dh">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($paisPasaporte as $item)
                                                    <option value="{{$item->Codigo}}">{{$item->Codigo}} - {{$item->Descripcion}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label"><code>.RENIEC-SUNAT</code></label>
                                            <a href="#" class="btn btn-primary btn-icon-text form-control ">
                                                Consultar
                                                <i class="btn-icon-append" data-feather="search"></i>
                                            </a>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Apellido Paterno</label>
                                            <input type="text" class="form-control" placeholder="OLIVARES">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Apellido Materno</label>
                                            <input type="text" class="form-control" placeholder="GUARDIA">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label">Nombres</label>
                                            <input type="text" class="form-control" placeholder="CARLOS ANDRES">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label">Sexo</label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="sexo_dh" id="sexo_dh_f" value="SI">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="sexo_dh" id="sexo_dh_m" value="NO" checked>
                                                    Femenino
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="estado_civil_dh">Estado Civil</label>
                                            <select class="select-busqueda w-100" name="estado_civil_dh" id="estado_civil_dh">
                                                <option disabled selected>SELECCIONAR</option>
                                                <option value="SOLTERO">SOLTERO</option>
                                                <option value="CASADO">CASADO</option>
                                                <option value="DIVORCIADO">DIVORCIADO</option>
                                                <option value="VIUDO">VIUDO</option>
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->

                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>
                        </section>

                        <h2>Vínculo Familiar</h2>
                        <section>
                            <h6 class="card-title">DOCUMENTOS QUE ACREDITAN VINCULO FAMILIAR</h6>
                            <form id="form_vinculo_familiar">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label" for="familiar">Vínculo Familiar</label>
                                            <select class="select-busqueda w-100" name="familiar" id="familiar">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($vinFamiliar as $item)
                                                    <option value="{{$item->Nro}}">{{$item->Abreviatura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="control-label" for="doc_vinculo">Documento que sustenta vínculo</label>
                                            <select class="select-busqueda w-100" name="doc_vinculo" id="doc_vinculo">
                                                <option disabled selected>SELECCIONAR</option>
                                                @foreach($docVinFam as $item)
                                                    <option value="{{$item->Codigo}}">{{$item->Abreviatura}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="situacion_doc">Situación</label>
                                            <input type="text"  class="form-control" name="situacion_doc" id="situacion_doc" value="ACTIVO" disabled>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label" for="nro_doc_vinculo">Número de Documento</label>
                                            <input type="text"  class="form-control" name="nro_doc_vinculo" id="nro_doc_vinculo" placeholder="645978354">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3" id="div_mes_concepcion">
                                        <div class="form-group">
                                            <label class="control-label" for="mes_concepcion">Mes de Concepción</label>
                                            <input type="month"  class="form-control" name="mes_concepcion" id="mes_concepcion" placeholder="645978354">
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->

                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right" id="saveVinFam">
                                Guardar Cambios
                                <i class="btn-icon-append" data-feather="check"></i>
                            </button>
                        </section>

                        <h2>Dirección del Derecho Habiente</h2>
                        <section>
                            <h6 class="card-title">DETALLE DIRECCION(s) DEL DERECHO - HABIENTE</h6>
                            <form id="form_direcciones">
                                <h6 class="card-title">Primera Dirección</h6>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label class="control-label" for="dh_direccion1">Primera Dirección</label>
                                            <input type="text"  class="form-control" name="dh_direccion1" id="dh_direccion1" placeholder="Avenida Jorge Basadre 498, San Isidro, Lima 27, Perú" >
                                        </div>
                                    </div><!-- Col -->



                                </div><!-- Row -->
                                <h6 class="card-title">Segunda Dirección</h6>
                                <div class="row">
                                    <div class="col-sm-2" id="div_btn_direccion2">
                                        <div class="form-group">
                                            <label class="control-label">Seguna Dirección</label>
                                            <button type="button" class="btn btn-primary btn-icon-text form-control" id="btn_direccion2" data-toggle="modal" data-target="#modal_direccion2">
                                                Detalle
                                                <i class="btn-icon-append" data-feather="plus"></i>
                                            </button>

{{--                                            Modal Direccion Derecho Habiente--}}
                                            <div class="modal fade" id="modal_direccion2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

                                                                            <select class="select-busqueda form-control form-control-sm mb-3" id="departamento" name="departamento">
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                                <option >Hijo Menor de Edad</option>
                                                                                <option >Conyuge</option>
                                                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                                                {{--                                                @endforeach--}}
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="provincia">Provincia</label>
                                                                            <select class="select-busqueda form-control form-control-sm mb-3" id="provincia" name="provincia">
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                                <option >Hijo Menor de Edad</option>
                                                                                <option >Conyuge</option>
                                                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                                                {{--                                                @endforeach--}}
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="distrito">Distrito</label>
                                                                            <select class="select-busqueda form-control form-control-sm mb-3" id="distrito" name="distrito">
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                                <option >Hijo Menor de Edad</option>
                                                                                <option >Conyuge</option>
                                                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                                                {{--                                                @endforeach--}}
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                </div><!-- Row -->
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="tipo-via">Tipo de Vía</label>
                                                                            <select class="select-busqueda form-control form-control-sm mb-3" id="tipo-via" name="tipo-via">
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                                <option >Hijo Menor de Edad</option>
                                                                                <option >Conyuge</option>
                                                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                                                {{--                                                @endforeach--}}
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nombre de Vía</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="PANAMERICANA" id="nombre-via" name="nombre-via">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Número</label>
                                                                            <input type="number" class="form-control form-control-sm" placeholder="1475" id="nro-via" name="nro-via">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Dpto</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="4" id="dpto" name="dpto">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Interior</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="5B" id="interior" name="interior">
                                                                        </div>
                                                                    </div><!-- Col -->

                                                                </div><!-- Row -->
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label" for="tipo-zona">Tipo de Zona</label>
                                                                            <select class="select-busqueda form-control form-control-sm mb-3" id="tipo-zona" name="tipo-zona">
                                                                                <option disabled selected>SELECCIONAR</option>
                                                                                <option >Hijo Menor de Edad</option>
                                                                                <option >Conyuge</option>
                                                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                                                {{--                                                @endforeach--}}
                                                                            </select>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nombre Zona</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="SECTOR 7" id="nombre-zona" name="nombre-zona">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Manzana</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="K" id="manzana" name="manzana">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Lote</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="5" id="lote" name="lote">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Km</label>
                                                                            <input type="number" class="form-control form-control-sm" placeholder="15" id="km" name="km">
                                                                        </div>
                                                                    </div><!-- Col -->

                                                                </div><!-- Row -->

                                                                <div class="row">
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Bloque</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="2C" id="bloque" name="bloque">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Etapa</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="PRIMERA" id="etapa" name="etapa">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-7">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Referencia</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="DOS CUADRAS PARQUE LAS PALMERAS" id="referencia" name="referencia">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                </div><!-- Row -->

                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Ref. Centro Asistencial de EsSalud</label>
                                                                            <br>
                                                                            <div class="form-check form-check-inline">
                                                                                <label class="form-check-label">
                                                                                    <input type="radio" class="form-check-input" name="ref-salud" id="si-ref-essalud" value="si">
                                                                                    Sí
                                                                                </label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <label class="form-check-label">
                                                                                    <input type="radio" class="form-check-input" name="ref-salud" id="no-ref-essalud" value="no">
                                                                                    No
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                    <div class="col-sm-8" id="ref-EsSalud">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Referencia Centro de EsSalud</label>
                                                                            <input type="text" class="form-control form-control-sm" placeholder="DOS CUADRAS PARQUE LAS PALMERAS" id="referencia_salud" name="referencia_salud">
                                                                        </div>
                                                                    </div><!-- Col -->
                                                                </div><!-- Row -->

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn  btn-secondary btn-icon-text col-sm-3" data-dismiss="modal">
                                                                <i class="btn-icon-prepend" data-feather="corner-up-left"></i>
                                                                Cancelar

                                                            </button>
                                                            <button type="button" class="btn  btn-primary btn-icon-text col-sm-3" id="save-address2" data-dismiss="modal">
                                                                Guardar
                                                                <i class="btn-icon-append" data-feather="check-circle"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{--                                            Fin Modal Direccion Derecho Habiente--}}
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-2" id="div_btn_quit_direccion2">
                                        <div class="form-group">
                                            <label class="control-label">Seguna Dirección</label>
                                            <button type="button" class="btn btn-danger btn-icon-text form-control" id="btn_quit_direccion2">
                                                Quitar
                                                <i class="btn-icon-append" data-feather="delete"></i>
                                            </button>
                                        </div>
                                    </div><!-- Col -->

                                </div><!-- Row -->
                                <div class="row">
                                    <div class="col-sm-10" id="div_direccion2">
                                        <div class="form-group">
                                            <label class="control-label" for="dh_direccion2">Segunda Dirección</label>
                                            <input type="text"  class="form-control" name="dh_direccion2" id="dh_direccion2" placeholder="Avenida de Roma 157, 1ra planta, Barcelona, 08011">
                                        </div>
                                    </div><!-- Col -->
                                </div><!-- Row -->

                                <h6 class="card-title">Teléfono</h6>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="cod_ciudad_tel">Código Ciudad</label>
                                            <select class="select-busqueda w-100" name="cod_ciudad_tel" id="cod_ciudad_tel">
                                                <option disabled selected>Seleccionar</option>
                                                <option >Trujillo</option>
                                                <option >Cajamarca</option>
                                                {{--                                                @foreach($tipo_doc_dh as $doc)--}}
                                                {{--                                                    <option value="{{$doc->Nro}}">{{$doc->Nro}} - {{$doc->Abreviatura}}</option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="nro_telefono">Número de Telefono</label>
                                            <input type="number"  class="form-control" name="nro_telefono" id="nro_telefono" placeholder="44 569832">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4" id="div_mes_concepcion">
                                        <div class="form-group">
                                            <label class="control-label" for="correo_dh">Dirección de Correo</label>
                                            <input type="email"  class="form-control" name="correo_dh" id="correo_dh" placeholder="example@gmail.com">
                                        </div>
                                    </div><!-- Col -->
                                </div>
                            </form>
                            <button type="submit" class="btn btn-danger btn-icon-text float-right" id="btn_finishDH">
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
    {{--Wizard--}}
    <link rel="stylesheet" href="../assets/vendors/jquery-steps/jquery.steps.css">
    {{--Selector Busqueda--}}
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">


    {{-- Styles for this page        --}}
    <link rel="stylesheet" href="../assets/css/derechoHab.css">
    @endpush
    @push('js')
    {{--Wizard--}}
    <script src="../assets/vendors/jquery-steps/jquery.steps.min.js"></script>

    {{--Selector Busqueda--}}
    <script src="../assets/vendors/select2/select2.min.js"></script>


    {{--    Form Validator--}}
    <script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>

    {{-- Methods of this Page   --}}
    <script src="../assets/js/derechoHab.js"></script>
    @endpush
@endsection
