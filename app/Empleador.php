<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Empleador extends Model
{
    protected $table = 'TAB_EMPLEADOR';
    protected $primaryKey = 'RUC';

    protected $fillable = [
        'RUC',
        'RazonSocial',
        'TipoEmpleador',
        'SENATI',
        'CodTel',
        'Telefono',
        'Correo',
        'REMYPE',
        'TSRPensionario',
        'Dedicaa',
        'SCTR',
        'PerDiscapacidad',
        'AgenPrivEmpleo',
        'DestacaDesplaza',
        'TerDestacaDesplaza',
    ];

    public function ValidarModelo($request)
    {
        $rules = [
            'TipoEmpleador' => 'required',
            'SENATI' => 'required',
            'CodTel' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required',
            'REMYPE' => 'required',
            'TSRPensionario' => 'required',
            'Dedicaa' => 'required',
            'SCTR' => 'required',
            'PerDiscapacidad' => 'required',
            'AgenPrivEmpleo' => 'required',
            'DestacaDesplaza' => 'required',
            'TerDestacaDesplaza' => 'required',
        ];

        $messages = [
            'required' => 'El campo es requerido.',
        ];

        $validator = $request->validate($rules,$messages);
        
        return $validator;
    }
}
