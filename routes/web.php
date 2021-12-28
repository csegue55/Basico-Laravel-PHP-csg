<?php

use App\Http\Controllers\CocheController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/********************************************************************************************************** */

  

//Coches
Route::get('/coches/home',         [CocheController::class, 'home'] )->name('coches.home');         //página inicial
Route::get('/coches/listado',      [CocheController::class,'listado'])->name('coches.listado');     //listado
Route::get('/coches/{coche}/edit', [CocheController::class, 'edit'])->name('coches.edit');          //edit   - Form
Route::put('coches/{coche}',       [CocheController::class, 'update'])->name('coches.update');      //edit   - A.Masiva
Route::get('/coches/create',       [CocheController::class, 'create'])->name('coches.create');      //create - Form
Route::post('/coches',             [CocheController::class, 'store'])->name('coches.store');        //create - A.Masiva
Route::get('/coches/{coche}',      [CocheController::class, 'show'])->name('coches.show');          //delete - Form
Route::delete('/coches/{coche}',   [CocheController::class, 'destroy'])->name('coches.destroy');    //delete - A.Masiva



//Propietarios
Route::get('/propietarios/listado',            [PropietarioController::class, 'listado'])->name('propietarios.listado');    //listado
Route::get('/propietarios/{propietario}/edit', [PropietarioController::class, 'edit'])->name('propietarios.edit');          //edit   - Form
Route::put('propietarios/{propietario}',       [PropietarioController::class, 'update'])->name('propietarios.update');      //edit   - A.Masiva
Route::get('/propietarios/create',             [PropietarioController::class, 'create'])->name('propietarios.create');      //create - Form
Route::post('/propietarios',                   [PropietarioController::class, 'store'])->name('propietarios.store');        //create - A.Masiva
Route::get('/propietarios/{propietario}',      [PropietarioController::class, 'show'])->name('propietarios.show');          //delete - Form
Route::delete('/propietarios/{propietario}',   [PropietarioController::class, 'destroy'])->name('propietarios.destroy');    //delete - A.Masiva

//login
Route::get('/reservas/iniciar', function () {return view('welcome');})->name('reservas.iniciar');

//Spatie: Roles y Permisos
//************************************************************************************************************
Route::get('/roles/listado',        [RolController::class, 'listado'])->name('roles.listado'); //listado roles
Route::get('/roles/{user}/editar',  [RolController::class, 'editar'])->name('roles.editar');                 //edit - Form
Route::put('roles/{user}',          [RolController::class, 'update'])->name('roles.update');     //edit   - A.Masiva
