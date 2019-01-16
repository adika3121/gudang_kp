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
                <form action="{{action('TbStockKeluarController@tambah_sn_keluar')}}" method="post">
                <div class="card-body">
                    {{csrf_field()}}
                    <input type="hidden" id="outlet" name="outlet" value="{{$nama_outlet}}"placeholder="Kode PN" class="form-control">
                    <input type="hidden" id="kode_master" name="kode_master" value="{{$kode_master}}"placeholder="Kode PN" class="form-control">
                    <input type="hidden" id="keterangan" name="keterangan" value="{{$ket}}"placeholder="Kode PN" class="form-control">
                    <p class="text-center">
                        Stock Berhasil Keluar <br>
                        Tambah Lagi?
                    </p>
                </div>
                <div class="card-footer">
                  <a href="/stock-keluar" class="btn btn-warning">Tidak</a>
                  <button type="submit" class="btn btn-success" data-dismiss="modal">Iya</button>
                </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
