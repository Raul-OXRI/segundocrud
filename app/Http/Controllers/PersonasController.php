<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\update;

class PersonasController extends Controller
{
    public function index()
    {
        //Visualizar la pagina
        $datos = Personas::all();
        return view('inicio',compact('datos'));
    }

    public function create()
    {
        //
        return view('customer/mod_create');
    }

    public function store(Request $request)
    {

        $personas = new Personas();
        
        $data = $request->except("_token");
        $personas::create($data); 

        return redirect()->route("personas.index")->with("success","Agregado con exito!");
    }

    public function show($id)
    {
        //
        $personas = Personas::find($id);
        return view("customer/mod_delete",compact('personas'));
    }

    public function edit($id)
    {
        //

        
        $personas = Personas::find($id);
        return view("customer/mod_update",compact('personas'));
    }

    

    public function update(Request $request, $id)
    {

        $personas = Personas::find($id);
        $data = $request->except("_token");
        if($personas->update($data)){
            return redirect()->route("personas.index")->with("success","Actualizado con exito!");
        }
        else{
            return redirect()->route("personas.index")->with("success","hubo un error al actualizar!");
        }
        
    }

    public function destroy($id)
    {
        //
        print_r($id);
    }
}
