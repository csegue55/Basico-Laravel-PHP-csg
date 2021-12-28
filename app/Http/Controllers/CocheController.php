<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCoche;
use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    public function listado(){
        $coches= Coche::all();
        //return response()->json($coches);
        return view('coches.listado', compact('coches'));
    }

/************************************************************************************************************************ */
    public function edit(Coche $coche){                         
        $coches= Coche::find($coche->id);  
        return view('coches.edit', compact('coches'));
}
/************************************************************************************************************************ */
    public function update(StoreCoche $request, Coche $coche){
        $coche->update($request->all());
        return redirect()->route('coches.listado');
}   
/************************************************************************************************************************ */
    public function create(){                               
        return view('coches.create');                       
}
/************************************************************************************************************************ */
    public function store(StoreCoche $request){    
/*
        $this->validate($request,[
        'nombre'=>'required',
        'email'=>'required|email|unique:users,email',
    ]);
*/
        $coche= Coche::create($request->all());                 
        return redirect()->route('coches.listado');
}
/************************************************************************************************************************ */
    public function show(Coche $coche){      
        return view('coches.show', compact('coche'));       
}
/************************************************************************************************************************ */
    public function destroy(Coche $coche){
        $coche->delete();   
        return redirect()->route('coches.listado');
}
/************************************************************************************************************************ */
    public function home(){
        return view('coches.home');
}
/************************************************************************************************************************ */

}
