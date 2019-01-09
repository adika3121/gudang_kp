<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master;
use App\tb_outlet;
use App\tb_merek;
use App\tb_kategori;
use App\tb_vendor;
use DB;

class MasterController extends Controller
{
    public function index()
    {
        $tampilBarang = master::with('tb_outlet','tb_merek', 'tb_kategori')
                        ->get();
        // $tampilBRG = DB
        return view('master', compact('tampilBarang'));
    }

    public function home(){
        return view('index2');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $outlet = tb_outlet::all();
        $merk = tb_merek::all();
        $kategori = tb_kategori::all();
        return view('tambahbarang', compact('outlet', 'merk', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'nomor' => 'required',
        //     'member' => 'required',
        //     'kasir' => 'required',
        //     'tanggal'=> 'required'
        //     ]);
        
        $master = new master();
        $outlet = $request->outlet;
        $kode_pn = $request->kode_pn;
        $nama_barang = $request->nama_barang;
        $kode_master = $outlet . $kode_pn . $nama_barang;
        $master->kode_outlet = $request->outlet;
        $master->kategori = $request->kategori;
        $master->kode_pn = $request->kode_pn;
        $master->nama_barang = $request->nama_barang;
        $master->merek = $request->merk;
        $master->kode_master = $kode_master;
        $master->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
