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
                <form name="insert_sn" class="form-horizontal" id="insert_sn">
                <div class="card-body">

                      {{ csrf_field() }}
                      <table class="table table-borderless" id="dynamic_field">
                        <tr>
                          <td><input type="text" id="kode_pn" name="sn" placeholder="Masukan Kode SN" class="form-control"></td>
                          <input id="outlet" name="outlet" value="{{$nama_outlet}}"placeholder="Kode PN" class="form-control">
                          <input id="kode_master" name="kode_master" value="{{$kode_master}}"placeholder="Kode PN" class="form-control">
                          <input id="keterangan" name="keterangan" value="{{$ket}}"placeholder="Kode PN" class="form-control">
                          <td><button name"add" id="add" class="btn btn-warning">Tambah Kode SN</button></td>
                        </tr>
                      </table>
                      <!-- <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="sn" class=" form-control-label">Kode Serial Number</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="kode_sn" name="sn" placeholder="Masukan Kode SN" class="form-control">
                          </div>
                      </div> -->
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" id="submit_keluar"class="btn btn-primary btn-sm submit_keluar">
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
  $(document).ready(function(){
    var i = 1;
    $('#add').click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+1+'"><td><input type="text" id="kode_pn" name="sn" placeholder="Masukan Kode SN" class="form-control"></td><input type="hidden" id="outlet" name="outlet" value="{{$nama_outlet}}"placeholder="Kode PN" class="form-control"><input type="hidden" id="kode_master" name="kode_master" value="{{$kode_master}}"placeholder="Kode PN" class="form-control"><input type="hidden" id="keterangan" name="keterangan" value="{{$ket}}"placeholder="Kode PN" class="form-control"><td><button name"remove" id="'+i+'" class="btn btn-danger btn_remove">Hapus</button></td></tr>');
    });
    $(document).on('click','btn_remove',function(){
      var button_id = $(this).attr("id");
      $("#row"+button_id+"").remove();
    });
    $(document).on('click','submit_keluar',function(){
      $.ajax({
        url:"/tambah-stock-keluar-sn-simpan",
        method:"POST",
        data:$('insert_sn').serialize(),
        success:function (data) {
          alert('data');
          $('#insert_sn')[0].reset();
        }
      });
    });
  });
</script>
@endsection
