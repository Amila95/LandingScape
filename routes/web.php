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

Route::get('/', 'CilentController@index');

Route::post('/message', 'CilentController@message');

Route::get('/index', function () {
    return view('index');
});
Route::get('/service', function () {
    return view('pages/forms/basic-form-elements');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
