<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConceptoController extends Controller
{
    public function index()
    {
        $conceptos = DB::table('TPS_GRUPO_CONCEPTOS')->where('Aplica', 'PP')->get();
        return view('concepto.index', compact('conceptos'));
    }
}
