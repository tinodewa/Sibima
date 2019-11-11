@extends('layouts/dashboard')
@section('title', 'Provinsi')

@section('css')
<style>
    button{
        border: none;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Data Provinsi</h4>
                    </div>
                    <div class="card-body">
                        <div class="paket">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif
                            <form action="{{ route('admin.provinsi.store') }}" method="POST">    
                                {{ csrf_field() }}                            
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Nama Provinsi</label>
                                                <input type="text" class="form-control" name="nama" placeholder="" value="{{ old('nama') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="ml-3 control-icon btn-fill btn-info" data-toggle="modal" data-target="#myModal2" href="#">
                                    Simpan
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    <!-- Mini Confirmation -->
    <div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                </div>
                <div class="modal-body text-center">
                    <p>Apakah anda sudah yakin?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn control-icon btn-fill btn-info">Ya</button>
                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!--  End Confirmation -->
@endsection