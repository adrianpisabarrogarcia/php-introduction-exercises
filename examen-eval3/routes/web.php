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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


//inicio
Route::get('/',"ControladorInicio@show")->name('index');

//proyectos
Route::get('/proyectos',"ControladorProyectos@show")->name('proyectos');
Route::post('/proyectos',"ControladorProyectos@store")->name('proyectosannadir');
Route::get('/eliminar/{id}',"ControladorProyectos@destroy")->name('proyectoeliminar');
Route::get('/modificar/{id}',"ControladorProyectos@modificar")->name('proyectomodificar');
Route::post('/modificarproyecto',"ControladorProyectos@update")->name('proyectoupdate');
Route::post('/annadiralumnos',"ControladorProyectos@annadirAlumnos")->name('annadiralumnos');
Route::get('/eliminarestudiante/{id}',"ControladorProyectos@eliminarEstudiante")->name('eliminarestudiante');


//Contacto
Route::get('/contacto',"ControladorContacto@show")->name('contacto');
Route::post('/contacto','ControladorContacto@contacto')->name('enviocontacto');



