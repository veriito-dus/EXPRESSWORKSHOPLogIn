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

Route::view('/admin', 'admin');
Route::view('/cliente', 'client.index');
Route::view('/editarCliente', 'client.edit');
Route::view('/inventario', 'inventario');
Route::view('/mecanico', 'mecanico');
Route::view('/recepcion', 'recepcion');

// Route::view('/prueba', 'client.index');
