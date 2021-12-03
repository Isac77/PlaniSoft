<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadorController extends Controller
{
    public function create(){
        return view('empleador.crear');
    }

    public function show(){
        return view('empleador.consultar');
    }
}
