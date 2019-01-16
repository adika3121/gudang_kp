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
                        <table class="table table-borderless table-striped table-earning" id="transaksitable">
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
                                    <td>{{$tp_transaksi->kode_master}}</td>
                                    <td>{{$tp_transaksi->sn}}</td>
                                    <td>{{$tp_transaksi->tb_vendor['nama_vendor']}}</td>
                                    <td>{{$tp_transaksi->created_at}}</td>
                                    <td>{{$tp_transaksi->keterangan}}</td>
                                    <td><button class="btn btn-outline-warning"
                                          data-toggle="modal"
                                          data-target="#editTransaksi"
                                          data-keterangan_transaksi="{{$tp_transaksi->keterangan}}"
                                          data-vendor_transaksi="{{$tp_transaksi->vendor}}"
                                          data-kode_transaksi={{$tp_transaksi->kode_transaksi}}>
                                            <i class="fa fa-edit"></i></button>

                                          <button class="btn btn-danger"
                                          data-toggle="modal"
                                          data-target="#deleteTransaksi"
                                          data-kode_transaksi={{$tp_transaksi->kode_transaksi}}
                                          ><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">
                            <i class="zmdi zmdi-plus"></i>Tambah Stock</button>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright" style="text-align= text-center;">
                            <p>Copyright © 2019 Kerja Praktek TI Udayana . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
                </div>

                <!-- modal large -->
          			<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
          				<div class="modal-dialog modal-lg" role="document">
          					<div class="modal-content">
          						<div class="modal-header">
          							<h5 class="modal-title" id="largeModalLabel">Pilih Outlet Terlebih Dahulu</h5>
          							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          								<span aria-hidden="true">&times;</span>
          							</button>
          						</div>
          						<div class="modal-body">
                        <div class="card" style="center">
                            <div class="card-header">
                                <strong>Pilih Outlet</strong>
                            </div>
                            <form action="{{action('TbTransaksiController@outlet')}}" method="post" class="">
                            <div class="card-body card-block">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="outlet" class=" form-control-label">Nama Outlet</label>
                                        <select class="form-control" name="outlet">
                                          <@if(count($tb_outlet->all()) > 0)
                                              @foreach($tb_outlet->all() as $outlet)
                                                  <option value="{{$outlet->kode_outlet}}">{{$outlet->nama_outlet}}</option>
                                              @endforeach
                                          @endif
                                        </select>
                                    </div>
                            </div>
                        </div>
          						</div>
          						<div class="modal-footer">
          							<button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
          							<button type="submit" class="btn btn-primary">Lanjut</button>
          						</div>
                      </form>
          					</div>
          				</div>
          			</div>
          			<!-- end modal large -->

                <!-- modal update -->
                <div class="modal fade" id="editTransaksi" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">Edit Catatan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('transaksi.update','test')}}" method="post" class="">
                                    {{method_field('patch')}}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="vendor" class=" form-control-label">Nama Vendor</label>
                                        <input type="hidden" id="kode_transaksi" name="kode_transaksi" value="">
                                        <select name="vendor" id="vendor" class="form-control">
                                        <@if(count($vendor->all()) > 0)
                                            @foreach($vendor->all() as $vnd)
                                                <option value="{{$vnd->kode_vendor}}">{{$vnd->nama_vendor}}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan" class=" form-control-label">Catatan</label>
                                        <input type="hidden" id="kode_transaksi" name="kode_transaksi" value="">
                                        <input type="text" id="keterangan" name="keterangan" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
          			<!-- end modal large -->

                {{-- Modal delete transaksi --}}
                <div class="modal fade" id="deleteTransaksi" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="largeModalLabel">Delete Transaksi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('transaksi.destroy','test')}}" method="post">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}
                                        <p class="text-center">
                                            Are you sure you want to delete this?
                                        </p>
                                        <input type="hidden" id="kode_transaksi" name="kode_transaksi" value="">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                                            <button type="submit" class="btn btn-warning">Yes, Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
