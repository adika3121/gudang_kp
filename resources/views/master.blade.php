@extends('layout.layout')

@section('master')
  active
@endsection

@section('content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width:100%;">
                                <h2 class="title-1 m-b-25">Master Barang</h2>
                                <div class="table-responsive table--no-card m-b-20">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Kode Outlet</th>
                                                <th>Kategori</th>
                                                <th>Kode PN</th>
                                                <th>Merk</th>
                                                <th>Nama Barang</th>
                                                <th class="text-right">Stock Masuk</th>
                                                <th class="text-right">Stock Keluar</th>
                                                <th class="text-right">Stock Gudang</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tampilBarang as $tp_brg)
                                            <tr>
                                                <td>{{$tp_brg->kode_master}}</td>
                                                <td>{{$tp_brg->kode_outlet}}</td>
                                                <td>{{$tp_brg->tb_kategori['nama_kategori']}}</td>
                                                <td>{{$tp_brg->kode_pn}}</td>
                                                <td>{{$tp_brg->tb_merek['nama_merek']}}</td>
                                                <td>{{$tp_brg->nama_barang}}</td>
                                                <td class="text-right">{{$tp_brg->stock_masuk}}</td>
                                                <td class="text-right">{{$tp_brg->stock_keluar}}</td>
                                                <td class="text-right">{{$tp_brg->sisa_stock}}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location='{{ route("transaksi") }}'">
                                        <i class="zmdi zmdi-plus"></i>Tambah Barang</button>
                            </div>



@endsection
