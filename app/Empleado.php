<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "altapersonal";

    protected $fillable = [
        'nombreEmpleado', 'inicio', 'telefono', 'domicilio', 
        'nss','curp','rfc','tallaCamisa', 'tallaPantalon',
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
