<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

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
        //
        $personas = new Personas();
        $personas->Nombre = $request->post('txtnombre');
        $personas->Apellido = $request->post('txtapellido');
        $personas->DPI = $request->post('txtdpi');
        $personas->NIT = $request->post('txtnit');
        $personas->Fecha_nacimiento = $request->post('txtfecha_nacimiento');
        $personas->save();
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
        //
        $personas = Personas::find($id);
        $personas->Nombre = $request->post('txtnombre');
        $personas->Apellido = $request->post('txtapellido');
        $personas->DPI = $request->post('txtdpi');
        $personas->NIT = $request->post('txtnit');
        $personas->Fecha_nacimiento = $request->post('txtfecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success","Actualizado con exito!");
    }

    public function destroy($id)
    {
        //
        print_r($id);
    }
}
