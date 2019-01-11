<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_transaksi;
use App\tb_vendor;
use App\master;
use App\tb_outlet;
use App\tb_merek;
use App\tb_kategori;

class TbTransaksiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $tampilTransaksi = tb_transaksi::with('tb_vendor', 'master')
                      ->get();
      $tb_outlet = tb_outlet::all();
      // $tampilBRG = DB
      return view('tampil_transaksi', compact('tampilTransaksi', 'tb_outlet'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function outlet(Request $request){

  }

  public function create(Request $request)
  {
    $nama_outlet = $request->outlet;
    $outlet = tb_outlet::all();
    $nama_barang = master::where('kode_outlet', $nama_outlet)
                    -> select('tb_master.kode_master as kode_master', 'tb_master.nama_barang as nama_barang')
                    -> get();
    $vendor = tb_vendor::all();

    return view('tambah_transaksi', compact('nama_outlet', 'outlet', 'nama_barang', 'vendor'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $kode_outlet = $request->outlet;
      $transaksi = new tb_transaksi();
      $transaksi->kode_master = $request->kode_master;
      $transaksi->sn = $request->sn;
      $transaksi->vendor = $request->kode_vendor;
      $transaksi->keterangan = $request->keterangan;
      $transaksi->save();
      return redirect("/transaksi");



  }

  /**
   * Display the specified resource.
   *
   * @param  \App\tb_transaksi  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function show(tb_transaksi $tb_transaksi)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\tb_transaksi  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function edit(tb_transaksi $tb_transaksi)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\tb_transaksi  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, tb_transaksi $tb_transaksi)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\tb_transaksi  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function destroy(tb_transaksi $tb_transaksi)
  {
      //
  }
}
