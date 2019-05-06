<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create/student','StudentController@create');
Route::post('/create/student','StudentController@store');
Route::get('/students', 'StudentController@index');
Route::get('/edit/student/{id}','StudentController@edit');
Route::post('/edit/student/{id}','StudentController@update');
Route::delete('/delete/student/{id}','StudentController@destroy');