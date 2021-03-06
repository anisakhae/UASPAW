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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crud', 'CrudController@index');

Route::get('/add', 'CrudController@create');

Route::post('/store', 'CrudController@store');

Route::get('/read/{id}', 'CrudController@show');

Route::get('/edit/{id}', 'CrudController@edit');

Route::post('/update/{id}', 'CrudController@update');

Route::get('/delete/{id}', 'CrudController@destroy');

Route::get('/read/{slug}', 'CrudController@show');

Route::get('query', 'CariController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
