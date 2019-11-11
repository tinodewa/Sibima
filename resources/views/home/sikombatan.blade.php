@extends('layouts.home')
@section('title', 'Sikombatan')

@section('content')
{{-- head --}}
<div class="head">
    <div class="container">
        <div class="head-title-box FlowupLabels">
            <h2 class="head-title font-weight-normal">Sikombatan</h2>
            <h4 class="head-subtitle font-weight-normal">Sistem Informasi Kondisi Jembatan</h4>
            <div class="head-search-bar fl_wrap">
                <label for="search" class="head-search-label fl_label">Search</label>
                <input type="text" id="search" onkeyup="myFunction()" class="head-search-field fl_input" title="Search here">
            </div>
        </div>
    </div>
</div>

{{-- content --}}
<div class="content">
    <div class="container">
        <h5 class="content-title">
            <i class="glyphicon glyphicon-map-marker"></i>
            Sangatta Selatan
        </h5>
        <div class="content-inner">
            <div class="row">
                <div class="content-item col-md-4">
                    <a href="{{ route('sibima.sikombatan.detail', 'name') }}">
                        <div class="content-item-inner">
                            <div class="content-item-address">
                                <p class="content-item-province">
                                    Sangatta Selatan
                                </p>
                                <p class="content-item-road">
                                    Jalan Poros ke Desa Sangkima Lama
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content-item col-md-4">
                    <a href="{{ route('sibima.sikombatan.detail', 'name') }}">
                        <div class="content-item-inner">
                            <div class="content-item-address">
                                <p class="content-item-province">
                                    Sangatta Selatan
                                </p>
                                <p class="content-item-road">
                                    Jalan Poros ke Desa Sangkima Lama
                                </p>
                            </div>
                        </div>
                    </a> 
                </div>
                <div class="content-item col-md-4">
                    <a href="{{ route('sibima.sikombatan.detail', 'name') }}">
                        <div class="content-item-inner">
                            <div class="content-item-address">
                                <p class="content-item-province">
                                    Sangatta Selatan
                                </p>
                                <p class="content-item-road">
                                    Jalan Poros ke Desa Sangkima Lama
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content-item col-md-4">
                    <a href="{{ route('sibima.sikombatan.detail', 'name') }}">
                        <div class="content-item-inner">
                            <div class="content-item-address">
                                <p class="content-item-province">
                                    Sangatta Selatan
                                </p>
                                <p class="content-item-road">
                                    Jalan Poros ke Desa Sangkima Lama
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content-item col-md-4">
                    <a href="{{ route('sibima.sikombatan.detail', 'name') }}">
                        <div class="content-item-inner">
                            <div class="content-item-address">
                                <p class="content-item-province">
                                    Sangatta Selatan
                                </p>
                                <p class="content-item-road">
                                    Jalan Poros ke Desa Sangkima Lama
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content-item col-md-4">
                    <a href="{{ route('sibima.sikombatan.detail', 'name') }}">
                        <div class="content-item-inner">
                            <div class="content-item-address">
                                <p class="content-item-province">
                                    Sangatta Selatan
                                </p>
                                <p class="content-item-road">
                                    Jalan Poros ke Desa Sangkima Lama
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection