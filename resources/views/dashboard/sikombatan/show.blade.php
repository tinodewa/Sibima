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
                <div class="card-body">
                    <div class="paket">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nomor Ruas</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>15.01.01</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nomor Ruas</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Gambar Peta</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="map-box col-md-12">
                                            <iframe class="map-screen" src="https://www.youtube.com/watch?v=q7jG-m0MEyM"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Gambar Jalan</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="img-box col-md-4">
                                            <img src="" alt="img" class="form-img">
                                        </div>
                                        <div class="img-box col-md-4">
                                            <img src="" alt="img" class="form-img">
                                        </div>
                                        <div class="img-box col-md-4">
                                            <img src="" alt="img" class="form-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nama Jembatan</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>Jembatan Sei Benu Muda Kiri</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>No Jembatan</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>1</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Jenis Konstruksi</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>Jembatan Rangka</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Km-Post (m)</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>0</p>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header bg-yellow ">
                                    <h4 class="card-title">Dimensi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="paket">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Panjang (m)(Sesuai SK)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>30</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Lebar (m)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>6</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Jumlah Bentang</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header bg-yellow ">
                                    <h4 class="card-title">Tipe / Kondisi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="paket">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Bangunan Atas :</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Tipe</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Rangka</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Kondisi</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Baik</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Bangunan Bawah :</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Tipe</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Abutmen Beton</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Kondisi</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Baik</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Fondasi :</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Tipe</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Kondisi</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Lantai :</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Tipe</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Beton</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Kondisi</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Baik</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                    <div class="card-header bg-yellow ">
                                        <h4 class="card-title">Koordinat (Desimal)</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="paket">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat X</label>
                                                            <span class="colon">:</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>117,133574223873</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y</label>
                                                            <span class="colon">:</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>0,704882406477569</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-3">
                                    <div class="form-group">
                                        <label>Ditolak</label>
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <label>Diterima</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-3">
                                    <div class="form-group">
                                        <a class="control-icon alert-success" href="{{ route('admin.sikombatan.edit', 1) }}">
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