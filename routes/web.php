<?php

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

Route::get('inicio',function(){
    return view('index');
});

Route::get('acerca-de',function(){
    return view('acercade');
});
Route::get('hola/quienes/buenos',function(){
    return view('quienessomos');
});

Route::get('contactanos',function(){
    return view('contacto');
});

