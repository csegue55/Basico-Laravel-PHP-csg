<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropietario;
use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function listado(){
        $propietarios= Propietario::all();
        return view('propietarios.listado', compact('propietarios'));
    }

/************************************************************************************************************************ */
    public function edit(Propietario $propietario){                         
        $propietarios= Propietario::find($propietario->id);  
        return view('propietarios.edit', compact('propietarios'));
}
/************************************************************************************************************************ */
    public function update(StorePropietario $request, Propietario $propietario){
        $propietario->update($request->all());
        return redirect()->route('propietarios.listado');
}   
/************************************************************************************************************************ */
    public function create(){                               
        return view('propietarios.create');                       
}
/************************************************************************************************************************ */

    public function store(StorePropietario $request){    
        $propietario= Propietario::create($request->all());                 
        return redirect()->route('propietarios.listado');
}
/************************************************************************************************************************ */
    public function show(Propietario $propietario){      
        return view('propietarios.show', compact('propietario'));       
}
/************************************************************************************************************************ */
    public function destroy(Propietario $propietario){
        $propietario->delete();   
        return redirect()->route('propietarios.listado');
}
/************************************************************************************************************************ */

}
