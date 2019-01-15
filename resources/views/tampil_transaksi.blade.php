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
                        <table class="table table-borderless table-striped table-earning" id="mastertable">
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
                                    <td>{{$tp_transaksi->created_at}}</td>
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

@endsection
