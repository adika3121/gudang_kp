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
                  <strong class="card-title" v-if="headerText">Kode SN</strong>
                </div>
                <form action="{{action('TbStockKeluarController@store')}}" method="post" class="form-horizontal">
                <div class="card-body">

                      {{ csrf_field() }}

                      <input type="hidden" id="kode_pn" name="outlet" value="{{$nama_outlet}}"placeholder="Kode PN" class="form-control">
                      <input type="hidden" id="kode_pn" name="outlet" value="{{$kode_master}}"placeholder="Kode PN" class="form-control">
                      <input type="hidden" id="kode_pn" name="outlet" value="{{$ket}}"placeholder="Kode PN" class="form-control">
                      <table class="table table-borderless" id="dynamic_field">
                        <tr>
                          <td><input type="text" id="kode_pn" name="sn" placeholder="Masukan Kode SN" class="form-control"></td>
                          <td><button name"add" id="add" class="btn btn-warning">Tambah Kode SN</button></td>
                        </tr>
                      </table>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="sn" class=" form-control-label">Kode Serial Number</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="kode_pn" name="sn" placeholder="Masukan Kode SN" class="form-control">
                          </div>
                      </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="suubmit" class="btn btn-primary btn-sm">
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

@section(script_sn)

@endsection
