@extends('layouts/dashboard')
@section('title', 'Users')

@section('content')
<form action="{{ route('admin.users.update', $user->id)}}" method="POST" enctype="multipart/form-data">    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">User</h4>
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
                            {{ csrf_field() }}  
                            {{ method_field('PUT') }} 
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="" name="name" value="{{ old('name', $user->name) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Foto Profil</label>
                                            <input type="file" data-upload="" accept="image/*" class="" name="image_url">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="" name="username" value="{{ old('username', $user->username) }}">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="" name="password" value="{{ old('password') }}">
                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->role_id == 1)
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label>Level</label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="role_id" id="exampleRadios1" value="2">
                                                        <span class="form-check-sign"></span>
                                                        Admin 1
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="role_id" id="exampleRadios2" value="3">
                                                        <span class="form-check-sign"></span>
                                                        Admin 2
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label>Status</label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="active">
                                                        <span class="form-check-sign"></span>
                                                        Active
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="non-active">
                                                        <span class="form-check-sign"></span>
                                                        non-active
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                @endif
                                
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
    <!--  End Confirmation -->
</form>
@endsection

@section('js')
@endsection