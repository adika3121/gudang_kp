@extends('layout.layout')

@section('content')

<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Data Kategori</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($tampilKategori as $tp_ktgr)
                                            <tr>
                                                <td>{{$tp_ktgr->nama_kategori}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largeModal">+ Tambah Kategori
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largeModalLabel">Tambahkan Kategori Baru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                        <form action="{{action('TbKategoriController@store')}}" method="post" class="">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nf-email" class=" form-control-label">Nama Kategori</label>
                                <input type="text" id="nf-email" name="nama_kategori" placeholder="Masukkan nama kategori.." class="form-control">
                            </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Simpan
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Batal
                            </button>
                        </div>          
                        </form>    
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection