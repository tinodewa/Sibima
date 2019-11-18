@extends('layouts/dashboard')
@section('title', 'Kondisi Jembatan')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Kondisi Jembatan</h4>
                    </div>
                    <div class="btn-box">
                        <a href="{{ route('admin.sikombatan.create') }}" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Nomor Ruas</th>
                                <th>Nama Ruas</th>
                                <th>Nomor Jembatan</th>
                                <th>Nama Jembatan</th>
                                <th>Kontrol</th>
                            </thead>
                            <tbody>
                                @foreach ($sikombatans as $sikombatan)
                                    <tr>
                                        <td>{{ $sikombatan->sikalan->no_ruas }}</td>
                                        <td>{{ $sikombatan->sikalan->nama_ruas_jalan }}</td>
                                        <td>{{ $sikombatan->no_jembatan }}</td>
                                        <td>{{ $sikombatan->nama_jembatan }}</td>
                                        <td style="display:table-cell;">
                                            <a class="control-icon alert-info" href="{{ route('admin.sikombatan.show', $sikombatan->id) }}">
                                                <i class="nc-icon nc-paper-2"></i>
                                                More
                                            </a>
                                            <a class="control-icon alert-success" href="{{ route('admin.sikombatan.edit', $sikombatan->id) }}">
                                                <i class="nc-icon nc-settings-tool-66"></i>
                                                Edit
                                            </a>
                                            @if (! Auth::user()->isAdmin2())
                                                <a class="control-icon alert-danger delete-btn" data-toggle="modal" data-target="#myModal2" href="{{ route('admin.sikombatan.destroy', $sikombatan->id) }}">
                                                    <i class="nc-icon nc-simple-remove"></i>
                                                    Delete
                                                </a>
                                            @endif
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
                    <form action="" id="delete-form" method="POST">
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