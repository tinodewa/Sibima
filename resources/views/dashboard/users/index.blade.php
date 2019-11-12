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
                    <div class="btn-box">
                        <a href="{{ route('admin.users.create') }}" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Nama Lengkap</th>
                                <th class="w-25">Foto</th>
                                <th>Username</th>
                                <th>Terakhir Login</th>
                                <th>Kontrol</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->full_name }}</td>
                                    <td>
                                        <div class="img-box">
                                            <img src="{{ asset('storage/galeri/'.$user->image_url) }}" alt="bromo" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->last_login }}</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-info" href="{{ url('/super-admin/user/detail') }}">
                                            <i class="nc-icon nc-paper-2"></i>
                                            More
                                        </a>
                                        <a class="control-icon alert-success" href="{{ route('admin.galeri.edit', $user->id) }}">
                                            <i class="nc-icon nc-settings-tool-66"></i>
                                            Edit
                                        </a>
                                        <a class="control-icon alert-danger" data-toggle="modal" data-target="#myModal2" href="#pablo">
                                            <i class="nc-icon nc-simple-remove"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                    <p>Yakin hapus paket ini?</p>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete-form" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button id="confirm-btn" class="btn btn-link btn-simple" style="cursor:pointer;">Hapus</button>
                    </form>
                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>

    <!--  End Confirmation -->
@endsection

@section('js')
<script>
    $('.delete-btn').click(function(){
        var url = $(this).attr('href');
        $('#delete-form').attr('action', url);
    });
</script>

@endsection