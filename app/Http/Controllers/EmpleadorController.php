<?php

namespace App\Http\Controllers;

use App\Empleador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmpleadorController extends Controller
{

    public function index()
    {
        $multinivel = DB::table('TAB_MULTINIVEL')->where('entidad', 'like', 'EMP%')->get();
        $codtel = DB::table('TPS_CODIGO_LARGA_DISTANCIA_NACIONAL')->get();

        $empleador = DB::table('TAB_EMPLEADOR')
            ->select(DB::raw('*, (SELECT Descripcion FROM TAB_MULTINIVEL WHERE codigo = TipoEmpleador) AS TipoEmpleador, (SELECT Descripcion FROM TAB_MULTINIVEL WHERE codigo = Dedicaa) AS Dedicaa'))->first();

        return view('empleador.index', compact('multinivel', 'codtel', 'empleador'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $emp = new Empleador();
        $validated = $emp->ValidarModelo($request);
        $validated['RUC'] = Auth::user()->ruc;
        $validated['RazonSocial'] = Auth::user()->razonSocial;
        Empleador::create($validated);
        return redirect()->back();
    }

    public function show($id = null)
    {
    }

    public function edit($id)
    {
        $empleador = Empleador::findOrFail($id);
        $multinivel = DB::table('TAB_MULTINIVEL')->where('entidad', 'like', 'EMP%')->get();
        $codtel = DB::table('TPS_CODIGO_LARGA_DISTANCIA_NACIONAL')->get();

        return view('empleador.editar', compact('empleador', 'multinivel', 'codtel'));
    }

    public function update(Request $request, $id)
    {
        $emp = new Empleador();
        $validated = $emp->ValidarModelo($request);
        $validated['RUC'] = Auth::user()->ruc;
        $validated['RazonSocial'] = Auth::user()->razonSocial;
        Empleador::findOrFail($id)->update($validated);

        return redirect()->to('/empleador');
    }

    public function destroy($id)
    {
        Empleador::findOrFail($id)->delete();
        return redirect()->back();
    }
}
