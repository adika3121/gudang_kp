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
                                                <th>Nama Merk</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tampilMerk as $tp_merk)
                                            <tr>
                                                <td>{{$tp_merk->nama_merek}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        <div class="col-lg-3">
                                <div class="card" style="center">
                                    <div class="card-header">
                                        <strong>Tambahkan Merk</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{action('TbMerekController@store')}}" method="post" class="">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama Merk</label>
                                                <input type="text" id="nf-email" name="nama_merek" placeholder="Masukkan nama merk.." class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Simpan
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Batal
                                    </div>
                            
                        </div>
                   
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection