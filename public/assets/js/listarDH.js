$(document).ready(function (){
    //Select Tipo Doc
    if ($("select.select_busqueda").length) {
        $("select.select_busqueda").select2({
            placeholder: 'Seleccionar'
        });
    }
    $("select.select_busqueda").select2({
        width: '100%'
    });

    //DATOS TITULAR
    var titular = $("#titular");
    titular.change(function (){
        if(this.value !== 'SS'){
            $("#nro_doc_trab").append(`{{$trab->NroDoc}}`);
        }
    });

});
