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

Route::get('/', 'MainController@index');

Route::get('car/{id}', 'CarController@show');
Route::get('carCreate', 'CarController@create');
Route::post('carStore', 'CarController@store');
Route::get('carEdit/{id}', 'CarController@edit');
Route::post('carUpdate/{id}', 'CarController@update');
Route::get('carDelete/{id}', 'CarController@destroy');
