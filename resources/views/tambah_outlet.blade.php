@extends('layout.layout')

@section('content')

<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width:100%;">                                <h2 class="title-1 m-b-25">Data Outlet</h2>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Kode Outlet</th>
                                                <th>Nama Outlet</th>
                                                <th>Alamat Outlet</th>
                                                <th>No HP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($tampilOutlet as $tp_outlet)
                                            <tr>
                                                <td>{{$tp_outlet->kode_outlet}}</td>
                                                <td>{{$tp_outlet->nama_outlet}}</td>
                                                <td>{{$tp_outlet->alamat}}</td>
                                                <td>{{$tp_outlet->no_telp}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                    <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">+ Tambah Outlet
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Tambahkan Outlet Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <form action="{{action('TbOutletController@store')}}" method="post" class="">
                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Kode Outlet</label>
                                                <input type="text" id="nf-email" name="kode_outlet" placeholder="Masukkan kode outlet.." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama Outlet</label>
                                                <input type="text" id="nf-email" name="nama_outlet" placeholder="Masukkan nama outlet.." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Alamat Outlet</label>
                                                <input type="text" id="nf-email" name="alamat" placeholder="Masukkan alamat.." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">No HP</label>
                                                <input type="text" id="nf-email" name="no_telp" placeholder="Masukkan no. telp.." class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Simpan
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Batal
                                            </button>
                                        </form>
                                    </div>
                                </div>
                        </div>
                   
                        </div>
                        </div>

@endsection