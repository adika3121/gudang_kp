@extends('layout.layout')

@section('content')

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Stok Masuk </strong>Form
                            </div>
                            <div class="card-body card-block">
                                <form action="{{action('MasterController@store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Outlet</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="outlet" id="outlet" class="form-control">
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
                                            <label for="text-input" class=" form-control-label">Product No.</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="kode_pn" name="kode_pn" placeholder="Kode PN" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Nama Barang</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nama_barang" name="nama_barang" placeholder="Nama Barang" class="form-control">
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
                        {{--  </form>  --}}
                        
                    
                
            </div>
        </div>
    </div>
    </div>

    </div>

@endsection
    
