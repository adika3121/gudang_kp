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

Route::get('/dataBarang', 'MasterController@index');
Route::resource('/barang', 'MasterController');
Route::resource('/kategori', 'TbKategoriController');
Route::resource('/merk', 'TbMerekController');
Route::resource('/tambah-vendor', 'TbVendorController');
Route::resource('/outlet', 'TbOutletController');
Route::get('/', 'MasterController@home');
Route::get('/master', 'MasterController@index');
Route::get('/transaksi', 'TbTransaksiController@create')->name('transaksi');
// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
