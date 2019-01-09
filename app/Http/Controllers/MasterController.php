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

    public function kategori()
    {
        $tampilKategori = tb_kategori::all();
        return view('tambah_kategori', compact('tampilKategori'));
    }

    public function merk()
    {
        $tampilMerk = tb_merek::all();
        return view('tambah_merk', compact('tampilMerk'));
    }

    public function vendor()
    {
         $tampilVendor = tb_vendor::all();
         return view('tambah_vendor', compact('tampilVendor'));
    }
    public function outlet()
    {
        $tampilOutlet = tb_outlet::all();

        return view('tambah_outlet', compact('tampilOutlet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
