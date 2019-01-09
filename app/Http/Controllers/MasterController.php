<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master;
use App\tb_outlet;
use DB;

class MasterController extends Controller
{
    public function index()
    {
        $tampilBarang = master::with('tb_outlet')
                        ->get();
        return view('testBarang', compact('tampilBarang'));
    }

    public function tesTampilan(){
        return view('index2');
    }

    public function kategori(){
        return view('tambah_kategori');
    }

    public function merk(){
        return view('tambah_merk');
    }

    public function vendor(){
        return view('tambah_vendor');
    }
    public function outlet(){
        return view('tambah_outlet');
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
