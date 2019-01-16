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
                <form action="{{action('TbStockKeluarController@store')}}" method="post" name="insert_sn" class="form-horizontal" id="insert_sn">
                <div class="card-body">

                      {{ csrf_field() }}
                      <table class="table table-borderless" id="dynamic_field">
                        <tr>
                          <td><input type="text" id="sn" name="sn" placeholder="Masukan Kode SN" class="form-control"></td>
                          <input type="hidden" id="outlet" name="outlet" value="{{$nama_outlet}}"placeholder="Kode PN" class="form-control">
                          <input  id="id_master" name="id_master" value="{{$id_master}}"placeholder="Kode PN" class="form-control">
                          <input  id="kode_master" name="kode_master" value="{{$kode_master}}"placeholder="Kode PN" class="form-control">
                          <input type="hidden" id="keterangan" name="keterangan" value="{{$ket}}"placeholder="Kode PN" class="form-control">
                          <!-- <td><button type="button" name"add" id="add" class="btn btn-warning add">Tambah Kode SN</button></td> -->
                        </tr>
                      </table>

                </div>
                <div class="card-footer">
                    <button type="submit" name="submit_keluar" id="submit_keluar" class="btn btn-primary btn-sm submit_keluar" data-toggle="modal" data-target="#konfirmStock">
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

@section('script_sn')
<script>

</script>
@endsection
