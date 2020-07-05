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
Route::get('/','HomeController@index');
Route::get('/artikel','ArtikelController@index');
Route::get('/artikel/create','ArtikelController@create');
Route::get('/artikel/edit','ArtikelController@edit');
Route::get('/home','ArtikelController@home');
// Route::get('/artikel/{id}','ArtikelController@detail');
