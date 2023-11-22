<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\HabitacionsController;
use App\Http\Controllers\MetodopagoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersControllers;
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
    return view('index');
 });
//Cliente//
Route::get('/select',[UsersControllers::class,'index'])->name('users.select');
Route::post('/create/store',[UsersControllers::class,'store'])->name('users.store');
Route::get('/edit',[UsersControllers::class,'edit'])->name('users.edit');
Route::get('/update',[UsersControllers::class,'update'])->name('users.update');
Route::GET('/destroy/{id}',[UsersControllers::class,'destroy'])->name('users.destroy');
Route::get('/create',[UsersControllers::class,'create'])->name('users.create');
//empleado//
Route::resource('empleado',EmpleadosController::class);
// Route::get('/selectE',[UsersControllers::class,'index'])->name('empleado.select');
// Route::post('/create/storeE',[UsersControllers::class,'store'])->name('empleado.store');
// Route::delete('/destroyE/{id}',[UsersControllers::class,'destroy'])->name('empleado.destroy');
//habitacion//
Route::resource('habitacion',HabitacionsController::class);
// Route::get('/selectH',[UsersControllers::class,'index'])->name('habitacion.select');
// Route::post('/create/storeH',[UsersControllers::class,'store'])->name('habitacion.store');
// Route::delete('/destroyH/{id}',[UsersControllers::class,'destroy'])->name('habitacion.destroy');
//metodopago//
Route::resource('metododepago',MetodopagoController::class);
// Route::get('/selectM',[UsersControllers::class,'index'])->name('metodopago.select');
// Route::post('/create/storeM',[UsersControllers::class,'store'])->name('metodopago.store');
// Route::delete('/destroyM/{id}',[UsersControllers::class,'destroy'])->name('metodopago.destroy');
//reserva//
Route::resource('reserva',ReservaController::class);
// Route::get('/selectR',[UsersControllers::class,'index'])->name('reserva.select');
// Route::post('/create/storeR',[UsersControllers::class,'store'])->name('reserva.store');
// Route::delete('/destroyR/{id}',[UsersControllers::class,'destroy'])->name('reserva.destroy');
//role//
Route::resource('roles',RolesController::class);
// Route::get('/selectRO',[UsersControllers::class,'index'])->name('role.select');
// Route::post('/create/storeRO',[UsersControllers::class,'store'])->name('role.store');
// Route::delete('/destroyRO/{id}',[UsersControllers::class,'destroy'])->name('role.destroy');
