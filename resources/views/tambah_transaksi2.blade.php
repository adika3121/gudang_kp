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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <i class="mr-2 fa fa-align-justify"></i>
                <strong class="card-title" v-if="headerText">Modals</strong>
              </div>
              <div class="card-body">
                <form action="{{action('MasterController@store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Nama Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="outlet" id="outlet" class="form-control">
                                <@if(count($nama_barang->all()) > 0)
                                    @foreach($nama_barang->all() as $brg)
                                        <option value="{{$brg->kode_master}}">{{$brg->nama_barang}}</option>
                                    @endforeach
                            @endif
                            </select>
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Nama Vendor</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="vendor" id="kategori" class="form-control">
                            <@if(count($vendor->all()) > 0)
                                @foreach($vendor->all() as $vnd)
                                    <option value="{{$vnd->kode_vendor}}">{{$vnd->nama_vendor}}</option>
                                @endforeach
                            @endif
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Kode SN</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kode_pn" name="kode_pn" placeholder="SN" class="form-control">
                        </div>
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
    </div>
  </div>
@endsection
