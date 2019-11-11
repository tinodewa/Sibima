@extends('layouts.home')
@section('title', 'Sikombatan')

@section('content')
{{-- content --}}
<div class="content">
    <div class="container">
        <div class="content-map-box">
        </div>
        <div class="content-description">

            {{-- Keterangan Peta --}}
            <div class="row">
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
            </div>

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
                            <div class="col-md-3">
                                <div class="content-description-poin-photo">
                                    asd
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="content-description-poin-photo">
                                    asd
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="content-description-poin-photo">
                                    asd
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="content-description-poin-photo">
                                    asd
                                </div>
                            </div>
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
                                            017-1.0
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Kecamatan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            Sangatta Selatan
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Akses ke Jalan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            Kabupaten
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Nama Jalan
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            Jalan Poros ke Desa Sangkima Lama
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
                                            5,533 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Lebar
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            6 Meter
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
                                            0 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Telford / Kerikil
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            5,533 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Perkerasan Beton
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            0 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Tanah / Belum Tembus
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            0 Kilometer
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
                                            0 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Baik (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            0 %
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
                                            0 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Sedang (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            0 %
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
                                            0 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Rusak Ringan (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            0 %
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
                                            5,533 Kilometer
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="content-description-poin-inner-title">
                                            Rusak Berat (%)
                                        </div>
                                        <div class="content-description-poin-inner-text">
                                            100 %
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