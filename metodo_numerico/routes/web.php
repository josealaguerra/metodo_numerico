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
    return view('welcome');
});

Route::get('/muller', 'MullerController@index');
Route::get('/newtonRaphson', 'NewtonRaphsonController@index');




Route::get('/testText', function () {
    return 'Hello World !!';
});


Route::get('/testJSON', function () {
    return ['saludo'=>'Hola', 'nombre'=>'Mundo', ];
});