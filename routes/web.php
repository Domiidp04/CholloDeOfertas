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

Route::get('/', 'App\Http\Controllers\CholloController@index');

Route::delete('/chollos/{id}', 'App\Http\Controllers\CholloController@destroy')->name('chollos.destroy');

Route::get('/chollos/{id}/edit', 'App\Http\Controllers\CholloController@edit')->name('chollos.edit');
Route::put('/chollos/{id}', 'App\Http\Controllers\CholloController@update')->name('chollos.update');

// Ruta GET para mostrar el formulario de creación
Route::get('/chollos/create', 'App\Http\Controllers\CholloController@create');



Route::get('/chollos/{id}', 'App\Http\Controllers\CholloController@show');

// Ruta POST para procesar el formulario de creación
Route::post('/', 'App\Http\Controllers\CholloController@store');


