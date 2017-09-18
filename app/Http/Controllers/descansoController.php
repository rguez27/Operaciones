<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Empleado;

class descansoController extends Controller
{
    public function index(){
        return view('layouts.descansos');
    }

    public function show(){
    	$empleados = Empleado::select('id','nombreEmpleado')->get();
        return response()->json(
            $empleados->toArray()
            );
    }
}
