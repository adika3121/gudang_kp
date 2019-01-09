@extends('layout.layout')

@section('transaksi')
  active
@endsection

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div style="width:100%;">
                    <h2 class="title-1 m-b-25">Transaksi Barang Masuk</h2>
                    <div class="table-responsive table--no-card m-b-20">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Kode Master</th>
                                    <th>SN</th>
                                    <th>Vendor</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Catatan</th>
                                    <th>Ket</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tampilTransaksi as $tp_transaksi)
                                <tr>
                                    <td>{{$tp_transaksi->master['kode_master']}}</td>
                                    <td>{{$tp_transaksi->sn}}</td>
                                    <td>{{$tp_transaksi->tb_vendor['nama_vendor']}}</td>
                                    <td>{{$tp_transaksi->tgl_masuk}}</td>
                                    <td>{{$tp_transaksi->keterangan}}</td>
                                    <td><a href="" class="btn btn-outline-warning">
                                            <i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-outline-danger">
                                                    <i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" onclick="window.location='{{ route("tambahbarang") }}'">
                            <i class="zmdi zmdi-plus"></i>Tambah Stock</button>
                </div>
@endsection
