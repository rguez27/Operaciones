<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = "sectores";

    protected $fillable = [
        'supervisor', 'turno', 'servicio', 'notas', 
        'inscripcion', 'sector',
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
