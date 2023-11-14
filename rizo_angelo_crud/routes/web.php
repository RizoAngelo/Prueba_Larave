<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',[UsersControllers::class,'index'])->name('users.index');
Route::get('/store',[UsersControllers::class,'store'])->name('users.store');
Route::get('/edit',[UsersControllers::class,'edit'])->name('users.edit');
Route::get('/update',[UsersControllers::class,'update'])->name('users.update');
Route::get('/destroy/{id}',[UsersControllers::class,'destroy'])->name('users.destroy');