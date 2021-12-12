$(document).ready(function (){
    $("#wizard-Worker").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        transitionEffectSpeed: 200,
        autoFocus: false,

        labels: {
            finish: "Guardar",
            next: "Siguiente",
            previous: "Anterior",
            loading: "Cargando ..."
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            if(currentIndex === 0) {
                $('#workerProgress').css('width', '0%').attr('aria-valuenow',0).html('0%');
            }
            else if(currentIndex === 1){
                // $('#workerProgress').attr('aria-valuenow', 20);
                // $('#workerProgress').html('20%');
                $('#workerProgress').removeClass('bg-success').addClass('bg-danger').css('width', '20%').attr('aria-valuenow',20).html('20% En Progreso');
            }else if(currentIndex === 2){
                $('#workerProgress').removeClass('bg-success').addClass('bg-danger').css('width', '40%').attr('aria-valuenow',40).html('40% En Progreso');
            }else if(currentIndex === 3){
                $('#workerProgress').removeClass('bg-success').addClass('bg-danger').css('width', '60%').attr('aria-valuenow',60).html('60% En Progreso');
            }else if(currentIndex === 4){
                $('#workerProgress').removeClass('bg-success').addClass('bg-danger').css('width', '80%').attr('aria-valuenow',80).html('80% En Progreso');
            }
        },

    });

$('#finishTrab').click(function (){
    $('#workerProgress').removeClass('bg-danger').addClass('bg-success').css('width', '100%').attr('aria-valuenow',100).html('100% Completado ✔');
});
    //Tags Hidden
    $('#campo-dir').hide();
    $('#quitar-dir').hide();
    $('#ref-EsSalud').hide();
    $('#part-time').hide();

    //Data Seguridad Social
    $('#quitar-detail-reg-salud').hide();
    $('#detail-reg-salud').hide();

    $('#div-detail-reg-pen').hide();
    $('#div-quit-detail-reg-pen').hide();

    $('#div-detail-reg-os').hide();
    $('#div-quit-detail-reg-os').hide();

    $('#btn-detail-reg-salud').click(function (){
        $('#div-btn-deatil-reg-salud').hide();
        $('#quitar-detail-reg-salud').show();
        $('#detail-reg-salud').show();
    });
    $('#btn-quit-detail-reg-salud').click(function (){
        $('#detail-reg-salud').hide();
        $('#quitar-detail-reg-salud').hide();
        $('#div-btn-deatil-reg-salud').show();
    });

    $('#btn-add-reg-pen').click(function (){
        $('#div-btn-add-reg-pen').hide();
        $('#div-detail-reg-pen').show();
        $('#div-quit-detail-reg-pen').show();
    });

    $('#btn-quit-deatil-reg-pen').click(function (){
        $('#div-btn-add-reg-pen').show();
        $('#div-detail-reg-pen').hide();
        $('#div-quit-detail-reg-pen').hide();
    });
    $('#btn-add-reg-os').click(function (){
        $('#div-btn-add-reg-os').hide();
        $('#div-detail-reg-os').show();
        $('#div-quit-detail-reg-os').show();
    });

    $('#btn-quit-deatil-reg-os').click(function (){
        $('#div-btn-add-reg-os').show();
        $('#div-detail-reg-os').hide();
        $('#div-quit-detail-reg-os').hide();


    });



//    Segunda Direccion

    $('#quitar-dir').click(function (){
        $('#campo-dir').hide();
        $('#sec-dir').show();
        $('#quitar-dir').hide();

    });

    $('#modal-address').click(function (){
        $('#campo-dir').show();
        $('#sec-dir').hide();
        $('#quitar-dir').show();

        //Pasar Datos Direccion2

        var dpto = $('#departamento').val() === null ? '-' : $('#departamento option:selected').text(),
            prov = $('#provincia').val() === null ? '-' : $('#provincia option:selected').text(),
            dist = $('#distrito').val() === null ? '-' : $('#distrito option:selected').text(),
            tvia = $('#tipo_via').val() === null ? '-' : $('#tipo_via option:selected').text(),
            namevia = $('#nombre_via').val() === '' ? '-' : $('#nombre_via').val(),
            numerovia = $('#nro_via').val() === '' ? '-' : $('#nro_via').val(),
            depa = $('#dpto').val() === '' ? '-' : $('#dpto').val(),
            inter = $('#interior').val() === '' ? '-' : $('#interior').val(),
            tzona = $('#tipo_zona').val() === null ? '-' : $('#tipo_zona option:selected').text(),
            namezona = $('#nombre_zona').val() === '' ? '-' : $('#nombre_zona').val(),
            apple = $('#manzana').val() === '' ? '-' : $('#manzana').val(),
            lte = $('#lote').val() === '' ? '-' : $('#lote').val(),
            km = $('#km').val() === '' ? '-' : $('#km').val(),
            block = $('#bloque').val() === '' ? '-' : $('#bloque').val(),
            etapa = $('#etapa').val() === '' ? '-' : $('#etapa').val(),
            ref = $('#referencia').val() === '' ? '-' : $('#referencia').val();

        // $('#direccion2').val($dpto + ' ' + $prov + ' ' + $dist + ' ' + $tvia + ' ' + $namevia + ' ' + $numerovia + ' ' + $depa + ' ' + $inter + ' ' + $tzona + ' ' + $namezona + ' ' + $apple + ' ' + $lte + ' ' + $km + ' ' + $block + ' ' + $etapa + ' ' + $ref);

        $('#direccion2').val(`${dpto} ${prov} ${dist} ${tvia} ${namevia} ${numerovia} ${depa} ${inter} ${tzona} ${namezona} ${apple} ${lte} ${km} ${block} ${etapa} ${ref}`);

    });
//    Show Hidde Ref- EsSalud
    $('#si-ref-essalud').click(function (){
        $('#ref-EsSalud').show();
    });
    $('#no-ref-essalud').click(function (){
        $('#ref-EsSalud').hide();
    });
//    Dates Picker
    if($('#fecha-nac').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#fecha-nac').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('#fecha-nac').datepicker('setDate', today);
    }
    if($('#fecha-inicio').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#fecha-inicio').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('#fecha-inicio').datepicker('setDate', today);
    }
    if($('#fecha-fin').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#fecha-fin').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('#fecha-fin').datepicker('setDate', today);
    }
    if($('#fecha-inicio-lab').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#fecha-inicio-lab').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('#fecha-inicio-lab').datepicker('setDate', today);
    }
    if($('#fecha-fin-lab').length) {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        $('#fecha-fin-lab').datepicker({
            format: "dd/mm/yyyy",
            todayHighlight: true,
            autoclose: true
        });
        $('#fecha-fin-lab').datepicker('setDate', today);
    }

//    Datos Laborales
    $('#jornada_laboral').change(function (){
        if(this.value === 'JA' || this.value === 'JN'){
            $('#horas_trab').prop('disabled', false);
            $('#horas_trab').val('');
            $('#part-time').show();

        } else{
            $('#part-time').show();
            $('#horas_trab').prop('disabled', true);
            $('#horas_trab').val('8');
        }
    });

    //    Datos Laborales
    $('#sit_especial').change(function (){
        if(this.value === 'NN'){
            $('#sit_especial_det').prop('selectedIndex',3);
        } else{
            $('#sit_especial_det').prop('selectedIndex',0);

        }
    });

//    Select2 Busqueda
    if ($("select.select-busqueda").length) {
        $("select.select-busqueda").select2();

    }
    $("select.select-busqueda").select2({
        width: '100%',
        noResults: function () {
            return 'No hay';
        },
    });

//  AFPs
    $('#div_cuspp').hide();
    $('#div_web_sbs').hide();
    $('#reg_pen').change(function (){
       if (this.value === '21' || this.value === '22' || this.value === '23' || this.value === '24' || this.value === '25'){
           $('#div_cuspp').fadeIn(500);
           $('#div_web_sbs').fadeIn(500);
       } else{
           $('#div_cuspp').hide();
           $('#div_web_sbs').hide();
       }
    });

    //COMBOS ANIDADOS SECOND ADDRESS
    $('#second-address').one("click",function (){
        $.ajax({
            url: "/trabajador/dir2/cbos",
            method: 'GET',
            dataType: 'Json',
            beforeSend: function (){

            },
            success: function(data) {

                // $('#departamento').append(data.html);
                //alert(data['departamentos']);
                var dptos = data['departamentos'],
                    vias = data['tipoVia'],
                    zonas = data['tipoZona'];
                $.each(dptos, function (i, v){

                    var option = `<option value="${v.Codigo}">${v.DptoRegion}</option>`;
                    $("#departamento").append(option);
                });
                $.each(vias, function (i, v){

                    var option = `<option value="${v.Nro}">${v.Descripcion}</option>`;
                    $("#tipo_via").append(option);
                });
                $.each(zonas, function (i, v){

                    var option = `<option value="${v.Nro}">${v.Descripcion}</option>`;
                    $("#tipo_zona").append(option);
                });
            }
        }).done(function (res){
            // var dptos = JSON.parse(res);
            // $(dptos).each(function(i, v){ // indice, valor
            //     var option = `<option value="${v.Codigo}">${v.DptoRegion}</option>`;
            //     $("#departamento").append(option);
            // })


        });


    });

    $('#departamento').change(function (){

        var nameCombo = "PROVINCIA",
            IdCombo = $('#departamento').val(),
            IdCombo2 = "";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/trabajador/dir2/prov',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var prov = response['data'];
                $("#provincia").removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(prov, function (i, v){
                    var option = `
                        <option value="${v.Codigo}">${v.Provincia}</option>
                    `;
                    $("#provincia").append(option);
                });

            }

        });

    });
    $('#provincia').change(function (){

        var nameCombo = "DISTRITO",
            IdCombo = $('#provincia').val(),
            IdCombo2 = "";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/trabajador/dir2/dist',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var dist = response['data'];
                $("#distrito").removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(dist, function (i, v){
                    var option = `
                        <option value="${v.Ubigeo}">${v.Distrito}</option>
                    `;
                    $("#distrito").append(option);
                });

            }
        });
    });

    //CAT - OCUPACIONAL => OCUPACIONES
    var catOcupacional =  $("#cat_ocupacional");
    catOcupacional.change(function (){
        var ocupacion = $("#ocupacion");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var nameCombo = "OCUP_TRAB_PRIVADO",
            IdCombo = catOcupacional.val(),
            IdCombo2 = "";
        $.ajax({
            url: '/trabajador/dir2/ocup',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var item = response['data'];
                ocupacion.removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(item, function (i, v){
                    var option = `
                        <option value="${v.Codigo}">${v.descripcion}</option>
                    `;
                    ocupacion.append(option);
                });

            }
        });
    });

    //CAT - OCUPACIONAL => OCUPACIONES
    var sit_especial =  $("#sit_especial");
    sit_especial.change(function (){
        var sit_especial_det = $("#sit_especial_det");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var nameCombo = "SIT_ESPECIAL_TRAB",
            IdCombo = sit_especial.val(),
            IdCombo2 = "";
        $.ajax({
            url: '/trabajador/dir2/dse',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var item = response['data'];
                sit_especial_det.removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(item, function (i, v){
                    var option = `
                        <option value="${v.Nro}">${v.Abreviatura}</option>
                    `;
                    sit_especial_det.append(option);
                });

            }
        });
    });

    // INFORMACION ADICIONAL DE NIVEL DE ESTUDIOS
    var add_info_du = $("#add_info_du");
    add_info_du.one('click', function (){
        $.ajax({
            url: "/trabajador/est/ecomp",
            method: 'GET',
            dataType: 'Json',
            beforeSend: function (){

            },
            success: function(data) {
                var dptos = data['estudiosComp'],
                    sit_educativa_modal = $("#sit_educativa_modal");
                $.each(dptos, function (i, v){

                    var option = `<option value="${v.Nro}">${v.Descripcion}</option>`;
                    sit_educativa_modal.append(option);
                });
            }
        }).done(function (res){

        });
    });

    //INSTITUCIONES - CARRERAS - BLA BLA
    var tipo_inst = $("#tipo_inst"),
        name_inst = $("#name_inst"),
        carrera = $("#carrera"),
        year_egreso = $("#año_egreso");
    $('input[type=radio][name=reg_inst]').on('change', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var nameCombo = "TIPO_INSTITUCION",
            IdCombo = $('input[type=radio][name=reg_inst]:checked').val(),
            IdCombo2 = "";
        $.ajax({
            url: '/trabajador/depend/cbo',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var item = response['data'];
                tipo_inst.removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(item, function (i, v){
                    var option = `
                        <option value="${v.CodTipoInstitucion}">${v.DescTipoInstitucion}</option>
                    `;
                    tipo_inst.append(option);
                });

            }
        });
    });

                //Tipo => Institucion
    tipo_inst.on('change', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var nameCombo = "INSTITUCIONES",
            IdCombo = $('input[type=radio][name=reg_inst]:checked').val(),
            IdCombo2 = tipo_inst.val();
        $.ajax({
            url: '/trabajador/depend/cbo',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var item = response['data'];
                name_inst.removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(item, function (i, v){
                    var option = `
                        <option value="${v.CodInstitucion}">${v.DescInstitucion}</option>
                    `;
                    name_inst.append(option);
                });

            }
        });
    });

    //Tipo => CARRERAS
    name_inst.on('change', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var nameCombo = "CARRERAS",
            IdCombo = name_inst.val(),
            IdCombo2 = "";
        $.ajax({
            url: '/trabajador/depend/cbo',
            method: 'POST',
            dataType: 'json',
            data:{

                nameCombo: nameCombo,
                IdCombo: IdCombo,
                IdCombo2: IdCombo2
            },
            success: function (response){

                var item = response['data'];
                carrera.removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(item, function (i, v){
                    var option = `
                        <option value="${v.CodCarrera}">${v.DescCarrera}</option>
                    `;
                    carrera.append(option);
                });

            }
        });
    });

    carrera.one('change', function (){
        $.ajax({
            url: "/trabajador/est/years",
            method: 'GET',
            dataType: 'Json',
            beforeSend: function (){

            },
            success: function(data) {
                var years = data['years'];
                year_egreso.removeAttr('disabled').empty().append(`<option disabled selected>SELECCIONAR</option>`);
                $.each(years, function (i, v){

                    var option = `<option value="${v.A_Egreso}">${v.A_Egreso}</option>`;
                    year_egreso.append(option);
                });
            }
        }).done(function (res){

        });
    });

    //Llenar Tabla Detalle Estudios
    var addInfoEstudios = $("#addInfoEstudios"),
        content_Estudios = $("#content_Estudios");
    addInfoEstudios.click(function (){
        var uPeru = $('input[type=radio][name=unv_peru]:checked').val(),
            tipoInst = $('#tipo_inst option:selected').text(),
            regInst = $('input[type=radio][name=reg_inst]:checked').val() === '1' ? 'PUBLICA' : 'PRIVADA',
            nameInst = $('#name_inst option:selected').text(),
            carrera_name = $('#carrera option:selected').text(),
            year = $('#año_egreso option:selected').text();
        var item = `
            <tr>
                <th>${uPeru}</th>
                <td>${tipoInst}</td>
                <td>${regInst}</td>
                <td>${nameInst}</td>
                <td>${carrera_name}</td>
                <td>${year}</td>
                <td>
                    <button type="button" class="btn btn-danger btn-icon quit_item">
                        <i data-feather="delete"></i>
                    </button>
                </td>
            </tr>
        `;
        content_Estudios.append(item);
    });





    //Sweet Alert
    showSwal = function(type) {
        'use strict';
        if (type === 'basic') {
            swal.fire({
                text: 'Any fool can use a computer',
                confirmButtonText: 'Close',
                confirmButtonClass: 'btn btn-danger',
            })
        } else if (type === 'title-and-text') {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        } else if (type === 'title-icon-text-footer') {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            })
        } else if (type === 'custom-html') {
            Swal.fire({
                title: '<strong>HTML <u>example</u></strong>',
                icon: 'info',
                html:
                    'You can use <b>bold text</b>, ' +
                    '<a href="//github.com">links</a> ' +
                    'and other HTML tags',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    '<i data-feather="thumbs-up"></i>',
                cancelButtonAriaLabel: 'Thumbs down',
            });
            feather.replace();
        } else if (type === 'custom-position') {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        } else if (type === 'passing-parameter-execute-cancel') {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: '¿Está seguro?',
                text: "Los datos seran registrados",
                icon: 'question',
                showCancelButton: true,
                confirmButtonClass: 'mr-2',
                confirmButtonText: 'Sí, Registrar',
                cancelButtonText: 'No, Modificar!',
                reverseButtons: true,
                backdrop: false,

            }).then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'Datos Guardados',
                        'Los datos de Identificación fueron registrados',
                        'success'

                    )
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Operación Cancelada',
                        'Ningun dato ha sido registrado',
                        'info'
                    )
                }
            })
        } else if (type === 'message-with-auto-close') {
            let timerInterval
            Swal.fire({
                title: 'Cargando',
                icon: 'info',
                html: 'Tiempo Restante <strong></strong> milisegundos.',
                timer: 2000,
                backdrop: false,
                timerProgressBar: true,
                onBeforeOpen: () => {
                    Swal.showLoading()

                    timerInterval = setInterval(() => {
                        Swal.getContent().querySelector('strong')
                            .textContent = Swal.getTimerLeft()
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                ) {
                    console.log('OK')
                }
            })
        } else if (type === 'chaining-modals') {
            Swal.mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3']
            }).queue([
                {
                    title: 'Question 1',
                    text: 'Chaining swal2 modals is easy'
                },
                'Question 2',
                'Question 3'
            ]).then((result) => {
                if (result.value) {
                    Swal.fire({
                        title: 'All done!',
                        html:
                            'Your answers: <pre><code>' +
                            JSON.stringify(result.value) +
                            '</code></pre>',
                        confirmButtonText: 'Lovely!'
                    })
                }
            })
        } else if (type === 'dynamic-queue') {
            const ipAPI = 'https://api.ipify.org?format=json'
            Swal.queue([{
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text:
                    'Your public IP will be received ' +
                    'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return fetch(ipAPI)
                        .then(response => response.json())
                        .then(data => Swal.insertQueueStep(data.ip))
                        .catch(() => {
                            Swal.insertQueueStep({
                                icon: 'error',
                                title: 'Unable to get your public IP'
                            })
                        })
                }
            }])
        } else if (type === 'mixin') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1113000
            });

            Toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
            })
        }
    }

    //End Sweet Alert

    // SAVING GENERAL DATA DI-TRAB
    var saveDataI = $("#saveDI_Trab");
    saveDataI.click(function (){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger mr-2'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: '¿Está seguro?',
            text: "Los datos seran registrados",
            icon: 'question',
            showCancelButton: true,
            confirmButtonClass: 'mr-2',
            confirmButtonText: 'Sí, Registrar',
            cancelButtonText: 'No, Modificar!',
            reverseButtons: true,
            backdrop: false,

        }).then((result) => {
            if (result.value) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var p_Operacion = 'I',
                    p_IdTrab = 0,
                    p_CodTipoDoc = $('#tipo_doc').val(),
                    p_NroDoc = $('#nro_doc').val(),
                    p_FechaNac = '1990/04/02',
                    p_ApellidoP = $('#apaterno').val().toUpperCase(),
                    p_ApellidoM = $('#amaterno').val().toUpperCase(),
                    p_Nombres = $('#nombres').val().toUpperCase(),
                    p_CodPaisEm = $('#pais_emisor').val(),
                    p_Sexo = $('#sexo').val(),
                    p_EstadoCivil = $('#estado_civil').val(),
                    p_CodNacionalidad = $('#nacionalidad').val(),
                    p_CodTelef = $('#cod_phone').val(),
                    p_Telefono = $('#telefono').val(),
                    p_Correo = $('#correo').val().toUpperCase(),
                    p_Direccion1 = $('#direccion1').val().toUpperCase(),
                    p_Direccion2 = $('#direccion2').val() === '' ? 'SIN DIRECCION ALTERNATIVA' : $('#direccion2').val(),
                    p_RefEsSalud = 0,
                    p_CatTrabajador = $('#cat_trab').val(),
                    p_EmpRUC = '20539814886',
                    p_Situacion = '1';
                        $.ajax({
                    url: '/trabajador/saveDI',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        p_Operacion: p_Operacion,
                        p_IdTrab: p_IdTrab,
                        p_CodTipoDoc: p_CodTipoDoc,
                        p_NroDoc: p_NroDoc,
                        p_FechaNac: p_FechaNac,
                        p_ApellidoP: p_ApellidoP,
                        p_ApellidoM: p_ApellidoM,
                        p_Nombres: p_Nombres,
                        p_CodPaisEm: p_CodPaisEm,
                        p_Sexo: p_Sexo,
                        p_EstadoCivil: p_EstadoCivil,
                        p_CodNacionalidad: p_CodNacionalidad,
                        p_CodTelef: p_CodTelef,
                        p_Telefono: p_Telefono,
                        p_Correo: p_Correo,
                        p_Direccion1: p_Direccion1,
                        p_Direccion2: p_Direccion2,
                        p_RefEsSalud: p_RefEsSalud,
                        p_CatTrabajador: p_CatTrabajador,
                        p_EmpRUC: p_EmpRUC,
                        p_Situacion: p_Situacion
                    },
                    success: function (){
                        swalWithBootstrapButtons.fire(
                            'Datos Guardados',
                            'Los datos de Identificación fueron registrados',
                            'success'

                        )
                    },
                    error: function (){
                        swalWithBootstrapButtons.fire(
                            'Error al Guardar',
                            'Los datos de NO fueron registrados!, Intentar de nuevo',
                            'warning'

                        )
                    }
                });

            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Operación Cancelada',
                    'Ningun dato ha sido registrado',
                    'info'
                )
            }
        })
    });

    // END SAVING GENERAL DATA DI-TRAB

    // SAVING DATA LAB TRAB
    var saveDL = $("#saveDL");
    saveDL.click(function (){
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger mr-2'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: '¿Está seguro?',
            text: "Los datos seran registrados",
            icon: 'question',
            showCancelButton: true,
            confirmButtonClass: 'mr-2',
            confirmButtonText: 'Sí, Registrar',
            cancelButtonText: 'No, Modificar!',
            reverseButtons: true,
            backdrop: false,

        }).then((result) => {
            if (result.value) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var p_Operacion = 'I',
                    p_IdDL = 0,
                    p_IdTrab = 3,
                    p_FechaInicioPL = '2018/12/27',
                    p_FechaFinPL = null,
                    p_CodMotivoBaja = $("#mot_baja_registro").val() === 'NN' ?  null : $("#mot_baja_registro").val(),
                    p_CodTipoTrabajador = $("#tipo_trabajador"),
                    p_FechaInicioT = '2018/12/27',
                    p_FechaFinT = null,
                    p_CodReglaboral = $("#reg_lab"),
                    p_CodCatOcupacional = $("#cat_ocupacional"),
                    p_CodNivelEducativo = $("#nivel_educativo"),
                    p_CodOcupacionTrab = $("#ocupacion"),
                    p_CodTipoContrato = $("#tipo_contrato"),
                    p_CodTipoPago = $("#tipo_pago"),
                    p_CodPerRemuneracion = $("#per_pago"),
                    p_MontoPagoInicial = $("#pago_inicial"),
                    p_CodEstablecimiento = 0,
                    p_JornadaLaboral = $("#jornada_laboral"),
                    p_HorasTrabDay = $("#horas_trab"),
                    p_CodSituacionEspecial = $("#sit_especial_det"),
                    p_Discapacidad = 0,
                    p_Sindicalizado = 0,
                    p_CodSituacionTrabajador = $("#sit_trab");
                $.ajax({
                    url: '/trabajador/savedl',
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        p_Operacion: p_Operacion,
                        p_IdDL: p_IdDL,
                        p_IdTrab: p_IdTrab,
                        p_FechaInicioPL: p_FechaInicioPL,
                        p_FechaFinPL: p_FechaFinPL,
                        p_CodMotivoBaja: p_CodMotivoBaja,
                        p_CodTipoTrabajador: p_CodTipoTrabajador,
                        p_FechaInicioT: p_FechaInicioT,
                        p_FechaFinT: p_FechaFinT,
                        p_CodReglaboral: p_CodReglaboral,
                        p_CodCatOcupacional: p_CodCatOcupacional,
                        p_CodNivelEducativo: p_CodNivelEducativo,
                        p_CodOcupacionTrab: p_CodOcupacionTrab,
                        p_CodTipoContrato: p_CodTipoContrato,
                        p_CodTipoPago: p_CodTipoPago,
                        p_CodPerRemuneracion: p_CodPerRemuneracion,
                        p_MontoPagoInicial: p_MontoPagoInicial,
                        p_CodEstablecimiento: p_CodEstablecimiento,
                        p_JornadaLaboral: p_JornadaLaboral,
                        p_HorasTrabDay: p_HorasTrabDay,
                        p_CodSituacionEspecial: p_CodSituacionEspecial,
                        p_Discapacidad: p_Discapacidad,
                        p_Sindicalizado: p_Sindicalizado,
                        p_CodSituacionTrabajador: p_CodSituacionTrabajador
                    },
                    success: function (){
                        swalWithBootstrapButtons.fire(
                            'Datos Guardados',
                            'Los datos Laborales fueron registrados',
                            'success'

                        )
                    },
                    error: function (){
                        swalWithBootstrapButtons.fire(
                            'Error al Guardar',
                            'Los datos de NO fueron registrados!, Intentar de nuevo',
                            'warning'

                        )
                    }
                });

            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Operación Cancelada',
                    'Ningun dato ha sido registrado',
                    'info'
                )
            }
        })
    });

    // END SAVING DATA LAB TRAB


    //FIN
    $(document).on('click', '.quit_item', function (){
        alert(`It's Works`)
    });
});



