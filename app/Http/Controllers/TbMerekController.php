<?php

namespace App\Http\Controllers;

use App\tb_merek;
use Illuminate\Http\Request;

class TbMerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampilMerk = tb_merek::all();
        return view('tambah_merk', compact('tampilMerk'));
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
        $this->validate($request,[
            'nama_merek'=>'required']);

        $merk = new tb_merek();
        $merk -> nama_merek = $request -> nama_merek;
        $merk->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_merek  $tb_merek
     * @return \Illuminate\Http\Response
     */
    public function show(tb_merek $tb_merek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_merek  $tb_merek
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_merek $tb_merek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_merek  $tb_merek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_merek $tb_merek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_merek  $tb_merek
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_merek $tb_merek)
    {
        //
    }
}
