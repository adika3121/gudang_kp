<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_stock_keluar;
use App\tb_outlet;
use App\master;

class TbStockKeluarController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $stock_keluar = tb_stock_keluar::all();
    $tb_outlet = tb_outlet::all();
    return view('tampil_stock_keluar', compact('stock_keluar', 'tb_outlet'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

  }

  /**
   * Display the specified resource.
   *
   * @param  \App\tb_stock_keluar $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function show(tb_vendor $tb_stock_keluar)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\tb_vendor  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function edit(tb_vendor $tb_stock_keluar)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\tb_vendor  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\tb_vendor  $tb_vendor
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {

  }
}
