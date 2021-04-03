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
//    return view('welcome');
//});

Route::get('/', 'ProductosController@index2');

Route::get('productos/vender/{id}', 'ProductosController@vender');

Route::get('productos/vendido/{id}', 'ProductosController@vendido');


Route::get('/contenido', function () {
    return view('contenido');
});

Route::resource('usuarios', 'UsuariosController');

Route::resource('productos', 'ProductosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
