<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{
    public $search;

    /************************************************************************************************************************ */
        public function listado(){
        //$users= User::where('name','LIKE' ,'%'.$this->search.'%')
        //  ->orWhere('email','LIKE' ,'%'.$this->search.'%')
        //  ->all();                                
        $users= User::all();
        //dd($users);
        return view('roles.listado', compact('users'));
    }
    /************************************************************************************************************************ */
    public function editar(User $user){
    
        $roles= Role::all();
        return view('roles.edit', compact('user', 'roles'));
    }
    /************************************************************************************************************************ */
    public function update(Request $request, User $user){
        $user->roles()->sync($request->roles);              //pasara registros a la tabla intermedia  model_has_roles
        return redirect()->route('roles.editar', $user)->with('info', 'Roles asignados correctamente');
    }
}
    