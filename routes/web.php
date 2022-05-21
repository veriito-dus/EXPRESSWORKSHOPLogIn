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

Route::get('/', function () {
    return view('inicio');
    // return view('home');
    // return view('welcome');
});


//logIn
Route::get('/logIn', 'SessionsController@create');
Route::post('/logIn', 'SessionsController@store');
Route::get('/logOut', 'SessionsController@destroy');
//Register
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::view('/administrador', 'admin.index');
Route::view('/editarAdmin', 'admin.edit');
Route::view('/cliente', 'client.index');
Route::view('/editarCliente', 'client.edit');
Route::view('/recepcion', 'recepcion');
Route::resource('/recepcion','ReceptionController');
Route::resource('/inventario','InventarioController');
Route::resource('/mecanico','MecanicoController');

// Route::view('/mecanico', 'mecanico');
// Route::get('/recepcion','ReceptionController@index');

// Route::view('/prueba', 'client.index');
