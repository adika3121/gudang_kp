@extends('layout.layout')

@section('stock_keluar')
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
                  <strong class="card-title" v-if="headerText">Tambah Stock Keluar</strong>
                </div>
                <form action="{{action('TbStockKeluarController@tambah_sn_keluar')}}" method="post" class="form-horizontal">
                <div class="card-body">

                      {{ csrf_field() }}
                      <!-- {{$nama_outlet}} -->
                      <input type="hidden" id="kode_pn" name="outlet" value="{{$nama_outlet}}"placeholder="Kode PN" class="form-control">
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="kode_master" class=" form-control-label">Nama Barang</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <select name="id_master" id="#" class="form-control">
                                  <@if(count($nama_barang->all()) > 0)
                                      @foreach($nama_barang->all() as $brg)
                                          <option value="{{$brg->id_master}}">{{$brg->nama_barang}}</option>
                                      @endforeach
                              @endif
                              </select>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="keterangan" class=" form-control-label">Catatan</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <textarea type="text" id="kode_pn" rows="9" name="keterangan" placeholder="Masukan Catatan.." class="form-control"></textarea>
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
