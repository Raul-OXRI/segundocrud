<?php

use App\Http\Controllers\PersonasController;
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


Route::get('/',[PersonasController::class,'index'])->name('personas.index');
Route::get('/create_client',[PersonasController::class,'create'])->name('personas.create');
Route::post('/store',[PersonasController::class,'store'])->name('personas.store');
Route::get('/edit_client/{id}',[PersonasController::class,'edit'])->name('personas.edit');
Route::put('/update/{id}',[PersonasController::class,'update'])->name('personas.update');
Route::get('/show_client/{id}',[PersonasController::class,'show'])->name('personas.show');
Route::delete('/destroy/{id}',[PersonasController::class,'destroy'])->name('personas.destroy');
