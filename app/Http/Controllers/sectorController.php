<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Sector;
use View;

class sectorController extends Controller
{
    public function index(){
        return view('layouts.sectores');
    }

    public function create(Request $request){
    	return view('layouts.registroEmpleado');
    }

    public function store(Request $request){
        if ($request->ajax()) {
            Sector::create($request->all());
            return response()->json([
                "mensaje" => "Guardado con exito"
            ],200);
        }
    }
}
