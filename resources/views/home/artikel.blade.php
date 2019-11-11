@extends('layouts.home')
@section('title', 'Artikel')

@section('content')
{{-- content --}}
<div class="content article">
    <div class="container">
        <div class="row article-row">
            <div class="col-md-4">
                <div class="article-news">
                    <div class="article-news-title-box">
                        <h4 class="article-news-title">
                            Artikel Terbaru
                        </h4>
                    </div>
                    <div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #1
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Pemancangan Pertama Pembangunan Jembatan Sungai Telen
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #3
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Jalan Pendekat Kenyamukan Sudah Rampung, Ada Terkendala Causeway sepanjang 500 Meter
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #2
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #4
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Indonesia Jalin Kerjasama dengan World Bank Capai Universal Akses 2019
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #5
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Minim Anggaran dan Peralatan, 4 UPTD PU Kutim Sementara Tidak Dioperasikan
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #6
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Kadis PU Kutim Pastikan Jalan Kutai Timur Aman Untuk Dilalui Pemudik 2018
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #7
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Dinas PU Kutai Timur Genjot Pembangunan Ringroad Sangsaka
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #8
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Pesan Menteri Basuki Kepada Generasi Muda PUPR
                                </a>
                            </div>
                        </div>
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #9
                            </div>
                            <div class="article-news-content">
                                <a href="#">                                        
                                    Bangun Tiga Jembatan dan 13 Jalan Desa; Kondisi Defisit, Pembangunan Tetap Berlangsung
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="article-card">
                            <a href="{{ route('sibima.artikel.detail', 'name')}}">
                                <div class="article-img-box">
                                    <div class="article-category">
                                        Umum
                                    </div>
                                    <div class="article-writer">
                                        Admin
                                    </div>
                                </div>
                                <div class="article-description">
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="article-card">
                            <a href="{{ route('sibima.artikel.detail', 'name')}}">
                                <div class="article-img-box">
                                    <div class="article-category">
                                        Umum
                                    </div>
                                    <div class="article-writer">
                                        Admin
                                    </div>
                                </div>
                                <div class="article-description">
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="article-card">
                            <a href="{{ route('sibima.artikel.detail', 'name')}}">
                                <div class="article-img-box">
                                <div class="article-category">
                                    Umum
                                </div>
                                <div class="article-writer">
                                    Admin
                                </div>
                                </div>
                                <div class="article-description">
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="article-card">
                            <a href="{{ route('sibima.artikel.detail', 'name')}}">
                                <div class="article-img-box">
                                <div class="article-category">
                                    Umum
                                </div>
                                <div class="article-writer">
                                    Admin
                                </div>
                                </div>
                                <div class="article-description">
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="article-card">
                            <a href="{{ route('sibima.artikel.detail', 'name')}}">
                                <div class="article-img-box">
                                <div class="article-category">
                                    Umum
                                </div>
                                <div class="article-writer">
                                    Admin
                                </div>
                                </div>
                                <div class="article-description">
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="article-card">
                            <a href="{{ route('sibima.artikel.detail', 'name')}}">
                                <div class="article-img-box">
                                <div class="article-category">
                                    Umum
                                </div>
                                <div class="article-writer">
                                    Admin
                                </div>
                                </div>
                                <div class="article-description">
                                    Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection