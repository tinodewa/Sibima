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
                        @foreach ($articles as $key => $article)
                            <div class="article-news-item">
                                <div class="article-news-number">
                                    #{{ $key+1 }}
                                </div>
                                <div class="article-news-content">
                                    <a href="{{ route('sibima.artikel.detail', $article->id) }}">                                        
                                        {{ $article->title }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($articles as $key => $article)
                        <div class="col-md-6">
                            <div class="article-card">
                                <a href="{{ route('sibima.artikel.detail', $article->id)}}">
                                    <div class="article-img-box" style="background:url('{{asset('storage/artikel/'.$article->thumbnail)}}') !important;">
                                        <div class="article-info-box">
                                            <div class="article-category">
                                                {{$article->category}}
                                            </div>
                                            <div class="article-writer">
                                                {{$article->user->name}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-description">
                                        {{$article->title}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection