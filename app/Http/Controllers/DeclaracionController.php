<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeclaracionController extends Controller
{
    public function new(){
        return view('declaracion.nueva');
    }

    public function all(){
        return view('declaracion.registradas');
    }
}
