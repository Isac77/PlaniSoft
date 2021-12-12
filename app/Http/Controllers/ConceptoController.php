<?php

namespace App\Http\Controllers;

use App\Empleador;
use App\EmpleadorConcepto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConceptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conceptos = DB::table('TPS_GRUPO_CONCEPTOS')->where('Aplica', 'PP')->get();
        return view('concepto.index', compact('conceptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::select("call sp_update_empleador_concepto(?)", array($request->codigo));
        if ($request->ok != null) {
            foreach ($request->ok as $key => $value) {
                EmpleadorConcepto::where('Codigo', '=', $key)->update(['isActive' => $value == 'on' ? 1 : 0]);
            }
        }
        return response()->json("ok", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($codigo)
    {
        $conceptos = DB::table('TAB_EMPLEADOR_CONCEPTOS AS EC')->join('TPS_CONCEPTOS AS C', 'C.Codigo', '=', 'EC.Codigo')
            ->where('C.CodGrupo', $codigo)->get();
        return response()->json($conceptos, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
