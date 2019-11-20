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
                    </div>
                    <div class="article-detail-img-box">
                        <img class="article-detail-img" src="{{asset('storage/artikel/'.$article->thumbnail)}}" alt="">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection