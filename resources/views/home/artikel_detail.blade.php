@extends('layouts.home')
@section('title', 'Artikel')

@section('content')
{{-- content --}}
<div class="content article">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="article-detail">
                    <h2 class="article-detail-title">
                        {{$article->title}}
                    </h2>
                    <div class="article-detail-info list-inline">
                        <p class="article-detail-info-inner list-inline-item person">
                            {{$article->user->name}}
                        </p>
                        <p class="article-detail-info-inner list-inline-item date">
                            {{$article->created_at}}
                        </p>
                        {{-- <p class="article-detail-info-inner list-inline-item viewer">
                            69
                        </p> --}}
                    </div>
                    <div class="article-detail-img-box">
                        <img class="article-detail-img" src="{{asset('storage/galeri/'.$article->thumbnail)}}" alt="">
                    </div>
                    <div class="article-detail-text-box">
                        {!! $article->content !!}
                    </div>
                    <div class="article-detail-text">
                        <p>
                            <span class="font-weight-bold">Reporter</span> : {{$article->reporter}}
                        </P>
                        <p>
                            <span class="font-weight-bold">Editor</span> : {{$article->editor}}
                        </P>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="article-news">
                    <div class="article-news-title-box">
                        <h4 class="article-news-title">
                            Artikel Terbaru
                        </h4>
                    </div>
                    <div>
                        @foreach ($articles as $key => $article)
                        <div class="article-news-item">
                            <div class="article-news-number">
                                #{{$key+1}}
                            </div>
                            <div class="article-news-content">
                                <a href="{{ route('sibima.artikel.detail', $article->id) }}">                                        
                                    {{$article->title}}
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="article-news-item">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection