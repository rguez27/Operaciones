<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Empleado;
use View;

class empleadoController extends Controller
{
    public function index(){
        return view('layouts.verEmpleados');
    }

    public function create(Request $request){
    	return view('layouts.registroEmpleado');
    }

    public function show(){
    	$empleados = Empleado::select('id','nombreEmpleado', 'inicio', 'telefono', 'domicilio')->get();
        return response()->json(
            $empleados->toArray()
            );
    }

    public function store(Request $request){
        if ($request->ajax()) {
            Empleado::create($request->all());
            return response()->json([
                "mensaje" => "Guardado con exito"
            ],200);
        }
    }

    public function edit($id){
        $empleados = Empleado::find($id);
        
        return response()->json(
            $empleados->toArray()
            );
    }

    public function update(Request $request, $id){
        $empleados = Empleado::find($id);
        $empleados->fill($request->all());
        $empleados->save();

        return response()->json(["mensaje"=>"Actualizado"]);
    }
}
