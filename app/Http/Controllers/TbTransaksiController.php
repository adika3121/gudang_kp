<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master;
use App\tb_outlet;
use App\tb_merek;
use App\tb_kategori;

class TbTransaksiController extends Controller
{
    public function create()
    {
        $outlet = tb_outlet::all();
        $merk = tb_merek::all();
        $kategori = tb_kategori::all();
        return view('transaksi', compact('outlet', 'merk', 'kategori'));
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
        $master->outlet = $request->kode_outlet;
        $master->kategori = $request->kategori;
        $master->kode_pn = $request->kode_pn;
        $master->merk = $request->merek;
        $master->save();
        return redirect("/");
    }
}
