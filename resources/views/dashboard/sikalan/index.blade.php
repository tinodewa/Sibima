@extends('layouts/dashboard')
@section('title', 'Kondisi Jalan')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header">
                        <h4 class="card-title">Kondisi Jalan</h4>
                    </div>
                    <div class="btn-box">
                        <a href="{{ route('admin.sikalan.create') }}" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Kelompok Data Dasar</th>
                                <th>Nama Ruas Jalan</th>
                                <th>Tahun Data</th>
                                <th>Kontrol</th>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>Non Tol</td>
                                        <td>Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari</td>
                                        <td>2018</td>
                                        <td style="display:table-cell;">
                                            <a class="control-icon alert-info" href="{{ route('admin.sikalan.show', 1) }}">
                                                <i class="nc-icon nc-paper-2"></i>
                                                More
                                            </a>
                                            <a class="control-icon alert-success" href="{{ route('admin.sikalan.edit', 1) }}">
                                                <i class="nc-icon nc-settings-tool-66"></i>
                                                Edit
                                            </a>
                                            <a class="control-icon alert-danger" data-toggle="modal" data-target="#myModal2" href="#pablo">
                                                <i class="nc-icon nc-simple-remove"></i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
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
                    <button type="button" class="btn btn-link btn-simple">Hapus</button>
                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Confirmation -->
@endsection