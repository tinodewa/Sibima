@extends('layouts/dashboard')
@section('title', 'Kondisi Jembatan')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/home/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="http://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
@endsection

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
                                    <p>{{ $sikombatan->sikalan->no_ruas }}</p>
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
                                    <p>{{ $sikombatan->sikalan->nama_ruas_jalan }}</p>
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
                                        <div class="map-box col-md-12" id="map">
                                            
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
                                    <div class="row mb-3">
                                        @foreach ($sikombatan->images as $image)
                                            <div class="content-item col-md-3">
                                            <a class="example-image-link" href="{{ asset('storage/jembatan/'.$image->filename) }}" data-lightbox="example-1">
                                                <div class="content-item-inner" style="height:auto;">
                                                    <img class="example-image" src="{{ asset('storage/jembatan/'.$image->filename) }}" style="max-width:100%;">
                                                </div>
                                            </a>
                                            </div>
                                        @endforeach
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
                                    <p>{{ $sikombatan->nama_jembatan }}</p>
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
                                    <p>{{ $sikombatan->no_jembatan }}</p>
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
                                    <p>{{ $sikombatan->jenis_konstruksi }}</p>
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
                                    <p>{{ $sikombatan->km_post }}</p>
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
                                                    <p>{{ $sikombatan->panjang }}</p>
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
                                                    <p>{{ $sikombatan->lebar }}</p>
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
                                                    <p>{{ $sikombatan->jumlah_bentang }}</p>
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
                                                    <p>{{ $sikombatan->tipe_bangunan_atas }}</p>
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
                                                    <p>{{ $sikombatan->kondisi_bangunan_atas }}</p>
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
                                                    <p>{{ $sikombatan->tipe_bangunan_bawah }}</p>
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
                                                    <p>{{ $sikombatan->kondisi_bangunan_bawah }}</p>
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
                                                    <p>{{ $sikombatan->tipe_fondasi }}</p>
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
                                                <p>{{ $sikombatan->kondisi_fondasi }}</p>
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
                                                    <p>{{ $sikombatan->tipe_lantai }}</p>
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
                                                    <p>{{ $sikombatan->kondisi_lantai }}</p>
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
                                                        <p>{{ $sikombatan->koordinat_x }}</p>
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
                                                        <p>{{ $sikombatan->koordinat_y }}</p>
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
                                            <input type="checkbox" {{ $sikombatan->status_approve ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                        <label>Diterima</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-3">
                                    <div class="form-group">
                                        <a class="control-icon alert-success" href="{{ route('admin.sikombatan.edit', $sikombatan->id) }}">
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
	<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="{{ asset('embedkml/layer/vector/KML.js') }}"></script>
    <script>
        var urlKml = "{{ asset('storage/peta_jembatan/'.$sikombatan->gambar_peta) }}";
        console.log( urlKml);

        var map = new L.Map('map', {center: new L.LatLng(58.4, 43.0), zoom: 50});
		var osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		var track = new L.KML(urlKml, {async: true});
		console.log(track);
		track.on("loaded", function(e) {
			map.fitBounds(e.target.getBounds());
		});
		map.addLayer(track);
		map.addLayer(osm);
		map.addControl(new L.Control.Layers({}, {'Track':track}));
    </script>
@endsection