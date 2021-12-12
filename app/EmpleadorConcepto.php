<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadorConcepto extends Model
{
    protected $table = 'TAB_EMPLEADOR_CONCEPTOS';
    
    protected $fillable = [
        'id',
        'RUC',
        'Codigo',
        'isActive'
    ];

    public $timestamps = false;
}
