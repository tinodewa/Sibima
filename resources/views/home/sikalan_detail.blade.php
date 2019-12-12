@extends('layouts.home')
@section('title', 'Sikalan')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/home/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" />
@endsection
@section('content')
{{-- content --}}
<div class="content">
    <div class="container">
        <div class="content-map-box" id="map">
        </div>
        <script>
            
        </script>
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
                                        <div class="content-description-poin-inner-legenda">
                                            Ruas Jalan
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-legenda">
                                            Pin Jalan
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-legenda">
                                            Titik Rusak Ringan
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-legenda">
                                            Titik Rusak Berat
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
                                Foto Jalan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content-description-poin-box">
                        <div class="row">
                            @foreach ($sikalanImages as $sikalanImage)
                                <div class="content-item col-md-3">
                                    <a class="example-image-link" href="{{ asset('storage/jalan/'.$sikalanImage->filename) }}" data-lightbox="example-1">
                                        <div class="content-item-inner" style="height:auto;">
                                            <img class="example-image" src="{{ asset('storage/jalan/'.$sikalanImage->filename) }}" style="max-width:100%;">
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
                                            Nomor Jalan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->no_ruas }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kecamatan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->kecamatan }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Akses ke Jalan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->kecamatan }}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nama Jalan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->nama_ruas_jalan }}
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
                                            Panjang Ruas
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->panjang }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Lebar
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->lebar }} Meter
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Panjang Tiap Jenis Permukaan --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Panjang Tiap Jenis Permukaan
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
                                            Aspal / Penetrasi / Macadam
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->ashpalt }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Telford / Kerikil
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->telford }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Perkerasan Beton
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->rigid }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Tanah / Belum Tembus
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->tanah }} Kilometer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Panjang Tiap Kondisi --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="content-description-title-box">
                        <div class="content-description-title">
                            <p>
                                Panjang Tiap Kondisi
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
                                            Baik (Km)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->baik }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Baik (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $kondisi->baik }} %
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
                                            Sedang (Km)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->sedang }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Sedang (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $kondisi->sedang }} %
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
                                            Rusak Ringan (Km)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->rusak_ringan }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Rusak Ringan (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $kondisi->rusak_ringan }} %
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
                                            Rusak Berat (Km)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $sikalan->rusak_berat }} Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Rusak Berat (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            {{ $kondisi->rusak_berat }} %
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
                                            {{ $sikalan->informasi }}
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
	<script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('embedkml/layer/vector/KML.js') }}"></script>
    <script>
        var urlKml = "{{ asset('storage/peta/'.$sikalan->gambar_peta) }}";
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