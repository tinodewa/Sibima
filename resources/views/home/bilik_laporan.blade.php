@extends('layouts.home')
@section('title', 'Bilik Laporan')

@section('content')
{{-- content --}}
<div class="content">
    <div class="container">
        <div class="bilik-laporan">
            <h2 class="font-weight-normal text-center">Bilik Laporan</h2>
            <div class="bilik-laporan-form-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-description-title-box">
                            <div class="content-description-title yellow">
                                <p>
                                    Data Pelapor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-description-poin-box">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="content-description-poin-inner-legenda">
                                                <div class="col-md-12">
                                                    <label for="name" class="bilik-laporan-label">
                                                        Nama Lengkap
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="bilik-laporan-input" type="text" name="name" id="name" placeholder="isikan nama lengkap">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="content-description-poin-inner-legenda">
                                                <div class="col-md-12">
                                                    <label for="email" class="bilik-laporan-label">
                                                        Email / No. Handphone
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="bilik-laporan-input" type="text" name="email" id="email" placeholder="isikan email / no. telp">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="content-description-poin-inner-legenda">
                                                <div class="col-md-12">
                                                    <label for="laporan" class="bilik-laporan-label">
                                                        Laporan
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea class="bilik-laporan-input" name="laporan" id="laporan" cols="30" rows="2" placeholder="masukkan laporan anda"></textarea>
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
            <div class="bilik-laporan-form-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-description-title-box">
                            <div class="content-description-title yellow">
                                <p>
                                    Foto
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-description-poin-box">
                            <div class="row">
                                <div class="col-md-10">
                                    {{-- <div class="bilik-laporan-file-box">
                                        Pilih Gambar
                                        <input type="file" id="input-images" data-upload="" accept="image/*" class="bilik-laporan-input-file" name="image">
                                    </div> --}}
                                    <div class="bilik-laporan-file-box">
                                        <div class="wrapper-inner">
                                            <label for="input-images">
                                                <div class="wrapper-inner-text">
                                                    <span class="la la-plus-circle"></span>
                                                    <p>Pilih Gambar</p>
                                                </div>
                                            </label>
                                            <div class="wrapper-inner-image">
                                                <img class="image-preview" src="">
                                                <div class="remove-image">
                                                    <div class="remove-image-inner">
                                                        <span class="la la-times-circle"></span>
                                                        <p>Hapus Gambar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="file" id="input-images" data-upload="" accept="image/*" class="d-none input-file" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bilik-laporan-form-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-description-title-box">
                            <div class="content-description-title yellow">
                                <p>
                                    Lokasi
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-description-poin-box">
                            <div class="row">
                                <div class="col-md-10">
                                    {{-- <div class="bilik-laporan-file-box">
                                        Pilih Gambar
                                        <input type="file" id="input-images" data-upload="" accept="image/*" class="bilik-laporan-input-file" name="image">
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="bilik-laporan-map-box">
                                                <iframe class="bilik-laporan-map" src="https://www.youtube.com/" frameborder="0"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="content-description-poin-inner-legenda">
                                                <div class="col-md-12">
                                                    <label for="laporan" class="bilik-laporan-label">
                                                        Ruas Jalan
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea class="bilik-laporan-input" name="laporan" id="laporan" cols="30" rows="2" placeholder="isikan nama ruas jalan yang bermasalah"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="content-description-poin-inner-legenda">
                                                <div class="col-md-12">
                                                    <label for="name" class="bilik-laporan-label">
                                                        Latitude
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="bilik-laporan-input" type="text" name="name" id="name" placeholder="isikan latitude">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="content-description-poin-inner-legenda">
                                                <div class="col-md-12">
                                                    <label for="email" class="bilik-laporan-label">
                                                        Longitude
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input class="bilik-laporan-input" type="text" name="email" id="email" placeholder="isikan longitude">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="bilik-laporan-btn btn">
                                                <p>Kirim Laporan</p>
                                            </button>
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