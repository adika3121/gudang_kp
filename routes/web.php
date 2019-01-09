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

Route::get('/tes', 'MasterController@index');
Route::get('/', 'MasterController@tesTampilan');
Route::get('/kategori', 'MasterController@kategori');
Route::get('/merk', 'MasterController@merk');
Route::get('/tambah-vendor', 'MasterController@vendor');
Route::get('/outlet', 'MasterController@outlet');

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
