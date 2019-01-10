@extends('layout.layout')

@section('content')

<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width:50%; float:left; padding-right:10px;">
                            {{-- <div class="col-lg-5"> --}}
                                {{-- Data Kategori --}}
                                <h3 style="padding:10px;">Kategori</h3>
                                <div class="table-responsive table--no-card m-b-30 table-data">
                                    <table class="table table-borderless table-striped table-earning">
                                        {{-- <thead>
                                            <tr>
                                                <th>Data Kategori</th>
                                            </tr>
                                        </thead> --}}
                                        <tbody>
                                             @foreach($tampilKategori as $tp_ktgr)
                                            <tr>
                                                <td>{{$tp_ktgr->nama_kategori}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModalKategori">+ Tambah Kategori
                                </button>
                            {{-- </div> --}}
                            </div>
                            {{-- Data Merk --}}
                            <div style="width:50%; float:right;">
                            {{-- <div class="col-lg-5"> --}}
                                <h3 style="padding:10px;">Merk</h3>
                                <div class="table-responsive table--no-card m-b-30 table-data">
                                    <table class="table table-borderless table-striped table-earning">
                                        {{-- <thead>
                                            <tr>
                                                <th>Data Merk</th>
                                            </tr>
                                        </thead> --}}
                                        <tbody>
                                            @foreach($tampilMerk as $tp_merk)
                                            <tr>
                                                <td>{{$tp_merk->nama_merek}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            {{-- </div> --}}
                                <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModalMerk">+ Tambah Merk
                                </button>
                            </div>
                            {{-- Vendor --}}
                            <h3 style="padding-top:30px; padding-bottom:10px;">Vendor</h3>
                            <div style="width:100%;">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nama Vendor</th>
                                                <th>Alamat Vendor</th>
                                                <th>No HP</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tampilVendor as $tp_vendor)
                                            <tr>
                                                <td>{{$tp_vendor->nama_vendor}}</td>
                                                <td>{{$tp_vendor->alamat}}</td>
                                                <td>{{$tp_vendor->no_telp}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModalVendor">+ Tambah Vendor
                                </button>
                            </div>
                            {{-- Outlet --}}
                            <h3 style="padding-top:30px; padding-bottom:10px;">Outlet</h3>
                            <div style="width:100%;">
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
                                <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#ModalOutlet">+ Tambah Outlet
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal Kategori --}}
                <div class="modal fade" id="ModalKategori" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Tambahkan Kategori Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <form action="{{action('TbKategoriController@store')}}" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Nama Kategori</label>
                                    <input type="text" id="nf-email" name="nama_kategori" placeholder="Masukkan nama kategori.." class="form-control">
                                </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Batal
                                </button>
                            </div>          
                            </form>    
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Modal Merk --}}
                <div class="modal fade" id="ModalMerk" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Tambahkan Merk Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{action('TbMerekController@store')}}" method="post" class="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama Merek</label>
                                        <input type="text" id="nf-email" name="nama_merek" placeholder="Masukkan nama merk.." class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Batal
                                        </button>
                                    </div>          
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Modal Vendor --}}
                <div class="modal fade" id="ModalVendor" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Tambahkan Vendor Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{action('TbVendorController@store')}}" method="post" class="">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama Vendor</label>
                                        <input type="text" id="nf-email" name="nama_vendor" placeholder="Masukkan nama vendor.." class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Alamat Vendor</label>
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

                {{-- Modal outlet --}}
                <div class="modal fade" id="ModalOutlet" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
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