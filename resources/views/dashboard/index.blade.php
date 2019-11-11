@extends('layouts/dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Sikalan</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th class="w-25">Gambar Jalan</th>
                            <th>Nama Jalan</th>
                            <th>Kecamatan</th>
                            <th>Tanggal Input</th>
                            <th>jam Input</th>
                            <th>Kontrol</th>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>
                                        <div class="img-box">
                                            <img src="" alt="bromo" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>Jl. Kenangan</td>
                                    <td>Mantan</td>
                                    <td>kamis, 20 Oktober 2019</td>
                                    <td>08.23 WIB</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-info" href="{{ url('/super-admin/data-kondisi-jalan/detail') }}">
                                            <i class="nc-icon nc-paper-2"></i>
                                            More
                                        </a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Sikombatan</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th class="w-25">Gambar Jembatan</th>
                            <th>Nama Jembatan</th>
                            <th>Kecamatan</th>
                            <th>Tanggal Input</th>
                            <th>jam Input</th>
                            <th>Kontrol</th>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>
                                        <div class="img-box">
                                            <img src="" alt="bromo" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>Jl. Tangisan</td>
                                    <td>Doi</td>
                                    <td>kamis, 21 Oktober 2019</td>
                                    <td>01.23 WIB</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-info" href="{{ url('/super-admin/data-kondisi-jembatan/detail') }}">
                                            <i class="nc-icon nc-paper-2"></i>
                                            More
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
@endsection