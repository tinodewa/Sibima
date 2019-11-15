@extends('layouts.home')
@section('title', 'Profil')

@section('content')
{{-- content --}}
<div class="content">
    <div class="container">
        <div class="profil">
            <h2 class="font-weight-normal text-center">Profil</h2>
            <div class="article-detail-img-box">
                <img class="article-detail-img" src="{{ asset('storage/profil/'.$profil->thumbnail) }}" alt="" style="max-width:100%;">
            </div>
            <div class="article-detail-text-box">
                {!! $profil->content !!}
            </div>
        </div>
    </div>
</div>
@endsection