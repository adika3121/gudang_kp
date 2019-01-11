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
                <div class="col-lg-12">
                  <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Update Data Barang</strong>
                        </div>
                        <div class="card-body">
                          <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                              <!-- {{method_field('patch')}} -->
                              {{ csrf_field() }}
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="select" class=" form-control-label">Outlet</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <select name="modal-input-kode_outlet" id="outlet" class="form-control">
                                          <option value="" id="kode_outlet"></option>
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
                                      <label for="modal-input-kode_pn" class=" form-control-label">Kode PN</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <input type="text" id="modal-input-kode_pn" name="modal-input-kode_pn" class="form-control">
                                  </div>
                              </div>
                              <div class="row form-group">
                                      <div class="col col-md-3">
                                          <label for="text-input" class=" form-control-label">Nama Barang</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                          <input type="text" id="nama_barang" name="nama_barang" class="form-control">
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
