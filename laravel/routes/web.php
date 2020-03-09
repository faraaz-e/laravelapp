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
    // return view('welcome');
    return view('form/home'); //mycode
});


// Route::get('/form/home', 'FormController@create');
// Route::post('/form/home', 'FormController@store');
Route::get('store','FormController@create');
Route::post('create','FormController@store');