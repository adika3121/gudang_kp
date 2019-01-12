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
Route::resource('/transaksi', 'TbTransaksiController');
Route::resource('/stock-keluar', 'TbStockKeluarController');
Route::resource('/merk', 'TbMerekController');
Route::resource('/datavendor', 'TbVendorController');
Route::resource('/outlet', 'TbOutletController');
Route::resource('/lainnya', 'DataController');
Route::get('/master', 'MasterController@index');
Route::get('/tambah-barang', 'MasterController@create')->name('tambahbarang');
Route::post('/tambah-stock','TbTransaksiController@outlet');
// Route::get('/transaksi', 'TbTransaksiController@create')->name('transaksi');

Route::get('/tesTampil', function () {
    return view('tampil_stock_keluar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
