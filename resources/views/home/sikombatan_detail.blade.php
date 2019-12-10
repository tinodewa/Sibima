@extends('layouts.home')
@section('title', 'Sikombatan')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/home/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="http://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
@endsection

@section('content')
{{-- content --}}
<div class="content">
    <div class="container">
        <div class="content-map-box" id="map">
        </div>
        <div class="content-description">

            {{-- Keterangan Peta --}}
            {{-- <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Keterangan Peta
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nama Ruas 
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nama Jembatan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->nama_jembatan }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Jenis Konstruksi
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->jenis_konstruksi }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Km-Post (m)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->km_post }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- Foto Jalan --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Foto Jembatan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            @foreach ($sikombatanImages as $sikombatanImage)
                                <div class="content-item col-md-3">
                                    <a class="example-image-link" href="{{ asset('storage/jembatan/'.$sikombatanImage->filename) }}" data-lightbox="example-1">
                                        <div class="content-item-inner" style="height:auto;">
                                            <img class="example-image" src="{{ asset('storage/jembatan/'.$sikombatanImage->filename) }}" style="max-width:100%;">
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Data Umum --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Data Umum
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nomor Jembatan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->no_jembatan }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nama Jembatan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->nama_jembatan }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nama Jalan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->sikalan->nama_ruas_jalan }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kecamatan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->sikalan->kecamatan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Dimensi --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Dimensi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Panjang (m)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->panjang }} Meter
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Lebar (m)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->lebar }} Meter
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Jumlah Bentang
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->jumlah_bentang }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            {{-- Tipe Atau Kondisi --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Tipe/Kondisi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Tipe Bangunan Atas
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->tipe_bangunan_atas }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kondisi Bangunan Atas
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->kondisi_bangunan_atas }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Tipe Bangunan Bawah
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->tipe_bangunan_bawah }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kondisi Bangunan Bawah

                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->kondisi_bangunan_bawah }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Tipe Fondasi
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->tipe_fondasi }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kondisi Fondasi
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->kondisi_fondasi }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Tipe Lantai
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->tipe_lantai }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kondisi Lantai
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->kondisi_lantai }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Lainnya --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Lainnya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Informasi
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikombatan->informasi }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        var map = new L.Map('map', {center: new L.LatLng(58.4, 43.0), zoom: 50});
		var osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		var track = new L.KML(urlKml, {async: true});
		track.on("loaded", function(e) {
			map.fitBounds(e.target.getBounds());
		});
		map.addLayer(track);
		map.addLayer(osm);
		map.addControl(new L.Control.Layers({}, {'Track':track}));
    </script>
@endsection
