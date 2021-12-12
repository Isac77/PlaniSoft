<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DerechohabController extends Controller
{
    //
    public function showDerechoHab(){
        $dhs = DB::table('tab_derechohabiente')
            ->join('tps_vinculo_familiar', 'IdVinFamiliar','=','Nro')
            ->select('tab_derechohabiente.*','tps_vinculo_familiar.Abreviatura')
            ->get();
        $trab = DB::table('Tab_Trabajador')
            ->join('tps_tipo_doc','CodTipoDoc','=','Nro')
            ->select('IdTrab','ApellidoP','ApellidoM','Nombres','NroDoc')->get();
        return view('derechohab.listardh', compact('dhs','trab'));
    }
    public function createDerechoHab(){
        $tipo_doc = DB::select('CALL USP_ListarCombos("TIPO_DOC")');
        $paisPasaporte = DB::select('CALL USP_ListarCombos("PAIS_PASAPORTE")');
        $vinFamiliar = DB::select('CALL USP_ListarCombos("VINCULO_FAMILIAR")');
        $docVinFam = DB::select('CALL USP_ListarCombos("DOC_VIN_FAMILIAR")');
        $codTelefono = DB::select('CALL USP_ListarCombos("CODIGO_TELEFONO")');
        return view('derechohab.createdh', compact(
              'tipo_doc',
        'paisPasaporte',
            'vinFamiliar',
            'docVinFam',
            'codTelefono'
        ));

    }

}
