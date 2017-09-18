<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresas;

class panelController extends Controller
{
    public function index()
    {
        return view('layouts.mapa');
    }

    public function show(){
        $ubicacion = Empresas::select('id','direccion', 'lat', 'lng')->get();
        return response()->json(
            $ubicacion->toArray()
            );
    }}
