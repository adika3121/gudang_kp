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
                                                <th>Catatan</th>
                                                <th>Ket</th>
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
                                                <td>{{$tp_brg->keterangan}}</td>
                                                <td><a href="{{action('MasterController@edit', $tp_brg->kode_master)}}" class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i></a>
                                                        <a href="" class="btn btn-outline-danger">
                                                                <i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">
                                        <i class="zmdi zmdi-plus"></i>Tambah Barang</button>
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
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Data Barang</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="{{action('MasterController@store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Outlet</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="outlet" id="outlet" class="form-control">
                                            <@if(count($outlet->all()) > 0)
                                                @foreach($outlet->all() as $outlet)
                                                    <option value="{{$outlet->kode_outlet}}">{{$outlet->nama_outlet}}</option>
                                                @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Kategori</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="kategori" id="kategori" class="form-control">
                                        <@if(count($kategori->all()) > 0)
                                            @foreach($kategori->all() as $kategori)
                                                <option value="{{$kategori->kode_kategori}}">{{$kategori->nama_kategori}}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Product No.</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="kode_pn" name="kode_pn" placeholder="Kode PN" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama Barang</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang" class="form-control">
                                        </div>
                                    </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Merk</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="merk" id="merk" class="form-control">
                                        <@if(count($merk->all()) > 0)
                                            @foreach($merk->all() as $merk)
                                                <option value="{{$merk->kode_merek}}">{{$merk->nama_merek}}</option>
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>                                            
                                </div>
                                  
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
						</div>
						{{-- <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div> --}}
					</div>
				</div>
			</div>




@endsection
