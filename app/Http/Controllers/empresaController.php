<?php

namespace App\Http\Controllers;
use Input;
use Illuminate\Http\Request;
use App\Empresas;
use View;

class empresaController extends Controller
{
    public function index(){
    	return view('layouts.verEmpresas');
    }

    public function create(Request $request){
    	return View::make('layouts.registroEmpresa');
    }

    public function show(){
        $empresas = Empresas::all();
        return response()->json(
            $empresas->toArray()
            );
    }

    public function store(Request $request){
        if ($request->ajax()) {
            Empresas::create($request->all());
            return response()->json([
                "mensaje" => "Guardado con exito"
            ],200);
        }
    }

    public function edit($id){
        $empresas = Empresas::find($id);

         return response()->json(
            $empresas->toArray()
        );
    }

    public function update(Request $request, $id){
        $empresas = Empresas::find($id);
        $empresas->fill($request->all());
        $empresas->save();

        return response()->json(["mensaje"=>"Actualizado"]);
    }

    public function destroy(){
        $this->empresas->delete();
        return response()->json(["mensaje"=>"Borrado"]);
    }
}
