<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('newroute', function(){
   return "nueva ruta phils";
});

Route::get('nombre/{nombre}', function($nombre){
   return "Nombre: ".$nombre;
});

Route::get('apellido/{apellido?}', function($apellido = "garcia"){
   return "Apellido: ".$apellido;
});