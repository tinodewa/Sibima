@extends('layouts.home')
@section('title', 'Galeri')

@section('content')
{{-- content --}}
<div class="content galery">
    <div class="container">
        <h2 class="font-weight-normal text-center">Galeri</h2>
        <div class="content-inner">
            <div class="row">
                @foreach ($galeris as $galeri)
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="{{ asset('storage/galeri/'.$galeri->image_url) }}" data-lightbox="example-1" data-title="{{ $galeri->caption }}">
                            <div class="content-item-inner">
                                <img class="example-image" src="{{ asset('storage/galeri/'.$galeri->image_url) }}" alt="{{ $galeri->caption }}">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        {{ $galeri->caption }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection