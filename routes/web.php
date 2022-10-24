<?php

use App\Http\Controllers\animales;
use App\Models\animal;
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

Route::get('/',[animales::class,'index'])->name('animales.index');
Route::get('/muestra',[animales::class,'muestra'])->name('animales.muestra');
Route::post('/store',[animales::class,'store'])->name('animales.store');
Route::get('/edit/{id}',[animales::class,'edit'])->name('animales.edit');
Route::put('/update/{id}',[animales::class,'update'])->name('animales.update');
Route::delete('/destroy/{id}',[animales::class,'destroy'])->name('animales.destroy');