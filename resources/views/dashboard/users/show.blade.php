@extends('layouts/dashboard')
@section('title', 'Users')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">User</h4>
                </div>
                <div class="card-body">
                    <div class="paket">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>Admininstrator</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Foto Profil</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="img-box">
                                        <img src="#" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>4dmin</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>Pengen_Siaran</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>Admin 1</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Terakhir Login</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>2 Agustus 2019 , 17.23 WIB</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>non-active</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ml-3">
                                <div class="form-group">
                                    <a class="control-icon alert-success" href="{{ url('/super-admin/user/tambah') }}">
                                        <i class="nc-icon nc-settings-tool-66"></i>
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection