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

//Route::get('/', function () {
    //return view('welcome');});

Route::get('/', function () {
    return view('principal');
});

Route::get('/cartelera','App\Http\Controllers\PeliculasController@cartelera')->name('cartelera');

//perosna
Route::get('/persona','App\Http\Controllers\PersonaController@registro_persona')->name('registro_persona');
Route::post('/guardar/cliente','App\Http\Controllers\PersonaController@guardar_persona')->name('guardar_persona');
Route::get('/listar/cliente','App\Http\Controllers\PersonaController@listar_cliente');
Route::get('/modificarr/{id}','App\Http\Controllers\PersonaController@modificarr')->name('modificarr');
Route::patch('/editarr/{id}','App\Http\Controllers\PersonaController@editarr')->name('editarr');
Route::delete('/deleter/{id}','App\Http\Controllers\PersonaController@deleter')->name('deleter');
//usuario
Route::get('/usuario','App\Http\Controllers\UsuarioController@registro_usuario_persona');
route::post('/guardar/usuario','App\Http\Controllers\UsuarioController@guardar_usuario_persona')->name('guardar_usuario_persona');


//pelicula
Route::get('/pelicula','App\Http\Controllers\PeliculasController@registro_pelicula');

Route::post('/pelicula/guardar','App\Http\Controllers\PeliculasController@guardar_pelicula')->name('guardar_pelicula');
Route::get('/pelicula/listar','App\Http\Controllers\PeliculasController@listar_pelicula')->name('listar_pelicula');
Route::get('/modificar/{id}','App\Http\Controllers\PeliculasController@modificar')->name('modificar');
Route::patch('/editar/{id}','App\Http\Controllers\PeliculasController@editar')->name('editar');
Route::delete('/delete/{id}','App\Http\Controllers\PeliculasController@delete')->name('delete');









