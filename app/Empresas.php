<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = "empresas";

    protected $fillable = [
        'nombreEmpresa', 'razonSocial', 'rfc', 'direccion', 
        'lat', 'lng','telefono','correoContacto',
        'correoFacturacion','inscripcion',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //'password', 'remember_token',
    ];
}
