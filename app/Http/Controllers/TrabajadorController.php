<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class TrabajadorController extends Controller
{
    //
    public function showWorkers(){
        $trab = DB::table('tab_trabajador')
            ->join('tps_situacion_trabajador', 'Situacion','=','Nro')
            ->select('tab_trabajador.*','tps_situacion_trabajador.Abreviatura')->get();

        return view('trabajador.listar', compact('trab'));
//        return dd($trab);
    }
    public function createWorker(){

        $tipo_doc = DB::select('CALL USP_ListarCombos("TIPO_DOC")');
        $reg_salud = DB::select('CALL USP_ListarCombos("REG_SALUD")');
        $reg_pensionario = DB::select('CALL USP_ListarCombos("REG_PENSIONARIO")');
        $paisPasaporte = DB::select('CALL USP_ListarCombos("PAIS_PASAPORTE")');

        $nacionalidad = DB::select('CALL USP_ListarCombos("NACIONALIDAD")');

        $codTelefono = DB::select('CALL USP_ListarCombos("CODIGO_TELEFONO")');

        $motBaja = DB::select('CALL USP_ListarCombos("MOTIVO_BAJA_REGISTRO")');

        $tipoTrab = DB::select('CALL USP_ListarCombos("TIPO_TRABAJADOR")');

        $regLaboral = DB::select('CALL USP_ListarCombos("REGIMEN_LABORAL")');

        $catOcuTrab = DB::select('CALL USP_ListarCombos("CAT_OCUPACIONAL_TRABAJADOR")');

        $sitEdu = DB::select('CALL USP_ListarCombos("NIVEL_EDUCATIVO")');

        $tipoContrato = DB::select('CALL USP_ListarCombos("TIPO_CONTRATO")');

        $tipoPago = DB::select('CALL USP_ListarCombos("TIPO_PAGO")');

        $perPago = DB::select('CALL USP_ListarCombos("PER_PAGO")');

        $sitEstadoTrab = DB::select('CALL USP_ListarCombos("SIT_TRABAJADOR_ESTADO")');

        $convenio = DB::select('CALL USP_ListarCombos("CONVENION_NT2")');



        return view('trabajador.create', compact(
            'tipo_doc',
            'reg_pensionario',
            'reg_salud',
            'nacionalidad',
            'codTelefono',
            'paisPasaporte',
            'motBaja',
            'tipoTrab',
            'regLaboral',
            'catOcuTrab',
            'sitEdu',
            'tipoContrato',
            'tipoPago',
            'perPago',
            'sitEstadoTrab',
            'convenio'
        ));



    }
    public function secondAddress(){
        $departamentos = DB::select('CALL USP_ListarCombos("DEPARTAMENTOS")');
        $html = '';
        $tipoVia = DB::select('CALL USP_ListarCombos("TIPO_VIA")');
        $tipoZona = DB::select('CALL USP_ListarCombos("TIPO_ZONA")');

        /*foreach ($departamentos as $dpto) {
            $html .= '<option value="'.$dpto->Codigo.'">'.$dpto->DptoRegion.'</option>';
        }*/
//        return response()->json(['html'=>$html]);
        return response()->json(['departamentos'=>$departamentos, 'tipoVia'=>$tipoVia,'tipoZona'=>$tipoZona]);
    }

    public function getProv(Request $request){

        $provincias = DB::select("CALL usp_CombosAnidados(?,?,?)", [
            $request->input("nameCombo"),
            $request->input("IdCombo"),
            $request->input("IdCombo2")
        ]);

        return response()->json([
            "status"=>true,
            "data"=>$provincias
        ]);
    }
    public function getDist(Request $request){


        $distritos = DB::select("CALL usp_CombosAnidados(?,?,?)", [
            $request->input("nameCombo"),
            $request->input("IdCombo"),
            $request->input("IdCombo2")
        ]);
        return response()->json([
            "status"=>true,
            "data"=>$distritos
        ]);
    }

    // CAT OCUPACIONAL Y OCUPACIONES
    public function getOcupaciones(Request $request){
        $ocupaciones = DB::select("CALL usp_CombosAnidados(?,?,?)", [
            $request->input("nameCombo"),
            $request->input("IdCombo"),
            $request->input("IdCombo2")
        ]);
        return response()->json([
            "status"=>true,
            "data"=>$ocupaciones
        ]);
    }

    //Detalle Situacion Especial del Trabjador
    public function sitEspecialDetail(Request $request){
        $detalleSET = DB::select("CALL usp_CombosAnidados(?,?,?)", [
            $request->input("nameCombo"),
            $request->input("IdCombo"),
            $request->input("IdCombo2")
        ]);
        return response()->json([
            "status"=>true,
            "data"=>$detalleSET
        ]);
    }

    //Detalle Estudios del Trabajador
    public function getEstudiosSuperiores(){
        $estudiosComp = DB::select('CALL USP_ListarCombos("ESTUDIOS_COMP")');
        return response()->json(['estudiosComp'=>$estudiosComp]);
    }

    //FUNCION COMBOS ANIDADOS
    public function comboAnidados(Request $request){
        $data = DB::select("CALL usp_CombosAnidados(?,?,?)", [
            $request->input("nameCombo"),
            $request->input("IdCombo"),
            $request->input("IdCombo2")
        ]);
        return response()->json([
            'status'=>true,
            'data'=>$data
        ]);
    }

    public function getYearEgreso(){
        $yearEgreso = DB::select('CALL USP_ListarCombos("YEAR_EGRESO")');
        return response()->json(['years'=>$yearEgreso]);
    }
    public function showProfile(){
        return view('trabajador.perfiles');
    }

    public function getReniec($dni){
//        $dni = 74250635;
        $data = Http::get('https://dniruc.apisperu.com/api/v1/dni/'.$dni.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNhbXllc2h1YTcyN0BnbWFpbC5jb20ifQ.0z14bKT2JWPsbs2y9j40RWrW_RvG9XaXtwUh2MRGOyQ')->object();
//        return view('trabajador.create', compact('data'));
        return 0;
    }
    public function getSunat($ruc){
        $data_sunat = Http::get('https://dniruc.apisperu.com/api/v1/ruc/'.$ruc.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InNhbXllc2h1YTcyN0BnbWFpbC5jb20ifQ.0z14bKT2JWPsbs2y9j40RWrW_RvG9XaXtwUh2MRGOyQ')->object();
//        return view('trabajador.create', compact('data_sunat'));
        return 0;
    }

    //SAVING DATA IDENT TRAB
    public function saveDI(Request $request){
        $lastID = DB::select('CALL usp_Crud_Trabajador(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $request->input('p_Operacion'),
            (int)$request->input('p_IdTrab'),
            $request->input('p_CodTipoDoc'),
            $request->input('p_NroDoc'),
            $request->input('p_FechaNac'),
            $request->input('p_ApellidoP'),
            $request->input('p_ApellidoM'),
            $request->input('p_Nombres'),
            $request->input('p_CodPaisEm'),
            $request->input('p_Sexo'),
            $request->input('p_EstadoCivil'),
            $request->input('p_CodNacionalidad'),
            $request->input('p_CodTelef'),
            $request->input('p_Telefono'),
            $request->input('p_Correo'),
            $request->input('p_Direccion1'),
            $request->input('p_Direccion2'),
            (int)$request->input('p_RefEsSalud'),
            $request->input('p_CatTrabajador'),
            $request->input('p_EmpRUC'),
            $request->input('p_Situacion'),
        ]);
        return response()->json([
            'status'=>true,
            'lastId'=>$lastID
        ]);
    }
    //SAVING DATA LAB TRAB
    public function saveDL(Request $request){
        $lastIDDL = DB::select('CALL usp_Crud_DatosLaborales(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $request->input('p_Operacion'),
            (int)$request->input('p_IdDL'),
            (int)$request->input('p_IdTrab'),
            $request->input('p_FechaInicioPL'),
            $request->input('p_FechaFinPL'),
            $request->input('p_CodMotivoBaja'),
            $request->input('p_CodTipoTrabajador'),
            $request->input('p_FechaInicioT'),
            $request->input('p_FechaFinT'),
            $request->input('p_CodReglaboral'),
            $request->input('p_CodCatOcupacional'),
            $request->input('p_CodNivelEducativo'),
            $request->input('p_CodOcupacionTrab'),
            $request->input('p_CodTipoContrato'),
            $request->input('p_CodTipoPago'),
            $request->input('p_CodPerRemuneracion'),
            (double)$request->input('p_MontoPagoInicial'),
            (int)$request->input('p_CodEstablecimiento'),
            $request->input('p_JornadaLaboral'),
            (int)$request->input('p_HorasTrabDay'),
            $request->input('p_CodSituacionEspecial'),
            (int)$request->input('p_Discapacidad'),
            (int)$request->input('p_Sindicalizado'),
            $request->input('p_CodSituacionTrabajador'),
        ]);
        return response()->json([
            'status'=>true,
            'lastIdDl'=>$lastIDDL
        ]);
    }
    //SAVING DATA LAB TRAB
    public function saveDSE(Request $request){
        $lastIDSE = DB::select('CALL usp_Crud_SitEducativa(?,?,?,?,?,?,?,?,?,?,?)', [
            $request->input('p_Operacion'),
            (int)$request->input('p_IdDSE'),
            (int)$request->input('p_IdTrab'),
            $request->input('p_CodNivelEducativo'),
            (int)$request->input('p_InstitucionPE'),
            $request->input('p_CodRegimen'),
            $request->input('p_CodTipoInstitucion'),
            $request->input('p_CodInstitucion'),
            (int)$request->input('p_IDCarrera'),
            $request->input('p_CodCarrera'),
            $request->input('p_AñoEgreso'),
        ]);
        return response()->json([
            'status'=>true,
            'lastIdDl'=>$lastIDSE
        ]);
    }
    //SAVING DATA SEG SOCIAL TRAB
    public function saveDSS(Request $request){
        $lastIDSS = DB::select('CALL usp_Crud_DSeguridadSocial(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $request->input('p_Operacion'),
            (int)$request->input('p_IdDSS'),
            (int)$request->input('p_IdTrab'),
            $request->input('p_CodRegSalud'),
            $request->input('p_FechaInicioS'),
            $request->input('p_FechaFinS'),
            (int)$request->input('p_AporteSCTR'),
            $request->input('p_CobPension'),
            $request->input('p_CobSalud'),
            $request->input('p_FechaInicio'),
            $request->input('p_FechaFin'),
            $request->input('p_CodEntAseguradora'),
            $request->input('p_CodRegPensionario'),
            $request->input('p_CUSPP'),
            $request->input('p_FechaInicioRP'),
            $request->input('p_FechaFinRP'),
        ]);
        return response()->json([
            'status'=>true,
            'lastIdDl'=>$lastIDSS
        ]);
    }
    //SAVING DATA SEG SOCIAL TRAB
    public function saveDT(Request $request){
        $lastIDT = DB::select('CALL usp_Crud_DatosTributarios(?,?,?,?,?,?)', [
            $request->input('p_Operacion'),
            (int)$request->input('p_IdDDT'),
            (int)$request->input('p_IdTrab'),
            $request->input('p_PerRenta5'),
            $request->input('p_No2Imp'),
            $request->input('p_Codigo'),
        ]);
        return response()->json([
            'status'=>true,
            'lastIdDl'=>$lastIDT
        ]);
    }
}
