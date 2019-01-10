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
                                            <tr class="data-row">
                                                <td class="kode_master">{{$tp_brg->kode_master}}</td>
                                                <td class="kode_outlet">{{$tp_brg->kode_outlet}}</td>
                                                <td class="nama_kategori">{{$tp_brg->tb_kategori['nama_kategori']}}</td>
                                                <td class="kode_pn">{{$tp_brg->kode_pn}}</td>
                                                <td class="nama_merek">{{$tp_brg->tb_merek['nama_merek']}}</td>
                                                <td class="nama_barang">{{$tp_brg->nama_barang}}</td>
                                                <td class="text-right">{{$tp_brg->stock_masuk}}</td>
                                                <td class="text-right">{{$tp_brg->stock_keluar}}</td>
                                                <td class="text-right">{{$tp_brg->sisa_stock}}</td>
                                                <td class="catatan">{{$tp_brg->keterangan}}</td>
                                                <td><a href="#" class="btn btn-outline-warning"
                                                      data-toggle="modal"
                                                      data-target="#ModalUpdate"
                                                      data-kodeMaster="{{$tp_brg->kode_master}}"
                                                      data-kodeOutlet="{{$tp_brg->kode_outlet}}"
                                                      data-namaKategori="{{$tp_brg->tb_kategori['nama_kategori']}}"
                                                      data-kodePN="{{$tp_brg->kode_pn}}"
                                                      data-namaMerek="{{$tp_brg->tb_merek['nama_merek']}}"
                                                      data-namaBarang="{{$tp_brg->nama_barang}}"
                                                      data-catatan="{{$tp_brg->keterangan}}"
                                                      >
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

      <!-- modal update -->
			<div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                  <div class="card">
                      <div class="card-header">
                          <strong>Update Barang</strong>Form
                      </div>
                      <div class="card-body card-block">
                          <form id="edit-form" action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                              {{method_field('patch')}}
                              {{ csrf_field() }}
                              <div class="row form-group">
                                  <div class="col col-md-3">
                                      <label for="select" class=" form-control-label">Outlet</label>
                                  </div>
                                  <div class="col-12 col-md-9">
                                      <select name="modal-input-kode_outlet" id="kode_outlet" class="form-control">
                                          <option value="" id="kode_outlet" name=""></option>
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
                  </form>



                </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>
            </form>
					</div>
				</div>
			</div>
			<!-- end modal large -->



@endsection

@section('jquery')
    <script type="text/javascript">
    $(document).ready(function() {
      /**
      * for showing edit item popup
      */

      // $(document).on('click', "#ModalUpdate", function() {
      //   $(this).addClass('edit-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.
      //
      //   var options = {
      //   'backdrop': 'static'
      //   };
      //   $('#ModalUpdate').modal(options)
      // })

      $(document).on('click', '.edit-modal', function() {
          $('#nama_barang').val($(this).data('namaBarang'));
          $('#n').val($(this).data('name'));
          $('#ModalUpdate').modal('show');
      });

      // on modal show
      // $('#ModalUpdate').on('show.bs.modal', function() {
      //     // var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
      //     // var row = el.closest(".data-row");
      //     console.log("Modal Buka")


      //     // get the data
      //     var id = el.data('kode_master');
      //     var button = $(event.relatedTarget);
      //
      //     var kode_outlet = button.data('kodeOutlet');
      //     var nama_kategori = row.children(".nama_kategori").text();
      //     var kode_pn = row.children(".kode_pn").text();
      //     var nama_merek = row.children(".nama_merek").text();
      //     var nama_barang = row.children(".nama_barang").text();
      //     var catatan = row.children(".catatan").text();
      //     var modal = $(this)
      //
      //     // fill the data in the input fields
      //     modal.find('.modal-body #kode_outlet').val(kode_outlet);
      //     $("#modal-input-id").val(id);
      //     $("#modal-input-kode_outlet").val(kode_outlet);
      //     $("#modal-input-nama_kategori").val(nama_kategori);
      //     $("#modal-input-kode_pn").val(kode_pn);
      //     $("#modal-input-nama_merek").val(nama_merek);
      //     $("#modal-input-nama_barang").val(nama_barang);
      //     $("#modal-input-catatan").val(catatan);
      //
      // })

      // // on modal hide
      // $('#ModalUpdate').on('hide.bs.modal', function() {
      // $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
      // $("#edit-form").trigger("reset");
      // })
    })
    </script>
@endsection
