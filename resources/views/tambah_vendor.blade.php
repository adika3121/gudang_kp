@extends('layout.layout')

@section('content')

<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
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
                            </div>
                           
                        <div class="col-lg-3">
                                <div class="card" style="center">
                                    <div class="card-header">
                                        <strong>Tambahkan Vendor</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama Vendor</label>
                                                <input type="text" id="nf-email" name="nf-email" placeholder="Masukkan nama vendor.." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Alamat Vendor</label>
                                                <input type="text" id="nf-email" name="nf-email" placeholder="Masukkan alamat vendor.." class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">No HP</label>
                                                <input type="text" id="nf-email" name="nf-email" placeholder="Masukkan No HP vendor.." class="form-control">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Batal
                                        </button>
                                    </div>
                                </div>
                        </div>
                   
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Kerja Praktek TI Unud. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection