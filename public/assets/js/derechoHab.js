$(document).ready(function (){
    'use strict';
    $("#wizardVertical-DerchoHab").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: 'vertical',
        labels: {
            finish: "Guardar",
            next: "Siguiente",
            previous: "Anterior",
            loading: "Cargando ..."
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            if(currentIndex === 0) {
                $('#progresDH').css('width', '0%').attr('aria-valuenow',0).html('0%');
            }
            else if(currentIndex === 1){
                $('#progresDH').removeClass('bg-success').addClass('bg-warning').css('width', '40%').attr('aria-valuenow',40).html('40% En Progreso');
            }else if(currentIndex === 2){
                $('#progresDH').removeClass('bg-success').addClass('bg-warning').css('width', '70%').attr('aria-valuenow',70).html('70% En Progreso');
            }
        }
    });
    $('#btn_finishDH').click(function (){
        $('#progresDH').removeClass('bg-warning').addClass('bg-success').css('width', '100%').attr('aria-valuenow',100).html('100% Completado ✔');
    });
    //Select Tipo Doc
    if ($("select.select-busqueda").length) {
        $("select.select-busqueda").select2({
            placeholder: 'Seleccionar'
        });
    }
    $("select.select-busqueda").select2({
        width: '100%'
    });

    //Form Validator
    // validate signup form on keyup and submit
    $("#formdh").validate({
        rules: {
            tipo_doc_dh: {
                required: true
            },
            nro_tipo_dh: {
                required: true,
                minlength: 8
            }
        },
        messages: {
            tipo_doc_dh: {
                required: "Porfavor, seleccionar un Tipo de Doc.",
            },
            nro_tipo_dh: {
                required: "Debe escrbir el Nro. de Doc.",
                minlength: "El documento debe contener 8 caracteres"
            },
        },
        errorPlacement: function(label, element) {
            label.addClass('mt-2 text-danger');
            label.insertAfter(element);
        },
        highlight: function(element, errorClass) {
            $(element).parent().addClass('has-danger')
            $(element).addClass('form-control-danger')
        },
        submitHandler: function (form){

            form.submit();
        }
    });

//    Segunda Dirección
    var $div_direccion2 = $('#div_direccion2'),
        $div_btn_add_direccion2 = $('#div_btn_direccion2'),
        $div_btn_quit_direccion2 = $('#div_btn_quit_direccion2'),
        $btn_add_direccion2 = $('#btn_direccion2'),
        $btn_quit_direccion2 = $('#btn_quit_direccion2');

    $div_direccion2.hide();
    $div_btn_quit_direccion2.hide();

    $('#save-address2').click(function (){
        $div_btn_add_direccion2.hide();
        $div_direccion2.show();
        $div_btn_quit_direccion2.show();

        //Pasar Datos Direccion2

        var $dpto = $('#departamento').val() === null ? '-' : $('#departamento').val(),
            $prov = $('#provincia').val() === null ? '-' : $('#provincia').val(),
            $dist = $('#distrito').val() === null ? '-' : $('#distrito').val(),
            $tvia = $('#tipo-via').val() === null ? '-' : $('#tipo-via').val(),
            $namevia = $('#nombre-via').val() === '' ? '-' : $('#nombre-via').val(),
            $numerovia = $('#nro-via').val() === '' ? '-' : $('#nro-via').val(),
            $depa = $('#dpto').val() === '' ? '-' : $('#dpto').val(),
            $inter = $('#interior').val() === '' ? '-' : $('#interior').val(),
            $tzona = $('#tipo-zona').val() === null ? '-' : $('#tipo-zona').val(),
            $namezona = $('#nombre-zona').val() === '' ? '-' : $('#nombre-zona').val(),
            $apple = $('#manzana').val() === '' ? '-' : $('#manzana').val(),
            $lte = $('#lote').val() === '' ? '-' : $('#lote').val(),
            $km = $('#km').val() === '' ? '-' : $('#km').val(),
            $block = $('#bloque').val() === '' ? '-' : $('#bloque').val(),
            $etapa = $('#etapa').val() === '' ? '-' : $('#etapa').val(),
            $ref = $('#referencia').val() === '' ? '-' : $('#referencia').val();

        $('#dh_direccion2').val($dpto + ' ' + $prov + ' ' + $dist + ' ' + $tvia + ' ' + $namevia + ' ' + $numerovia + ' ' + $depa + ' ' + $inter + ' ' + $tzona + ' ' + $namezona + ' ' + $apple + ' ' + $lte + ' ' + $km + ' ' + $block + ' ' + $etapa + ' ' + $ref);
    });

    $btn_quit_direccion2.click(function (){
        $div_direccion2.hide();
        $div_btn_quit_direccion2.hide();
        $div_btn_add_direccion2.show();
    });





    //Botones
    $('#saveVinFam').click(function (){
        var button = `Cambios Guardados <i class="btn-icon-append" data-feather="check-circle"></i>`
        $('#saveVinFam').removeClass('btn-danger').addClass('btn-success').html(button);
        //$('#saveVinFam').html("Cambios Guardados <i class=\"btn-icon-append\" data-feather=\"check-circle\"></i>");
    })

    //    Show Hidde Ref- EsSalud
    $('#ref-EsSalud').hide();
    $('#si-ref-essalud').click(function (){
        $('#ref-EsSalud').show();
    });
    $('#no-ref-essalud').click(function (){
        $('#ref-EsSalud').hide();
    });

    // SITUACION MADRE GESTANTE
    $("#div_mes_concepcion").hide();
    var comboVinFam = $("#familiar");
    comboVinFam.change(function (){
        if(this.value === '04'){
            $("#div_mes_concepcion").show();
        } else {
            $("#div_mes_concepcion").hide();
        }
    });

});
