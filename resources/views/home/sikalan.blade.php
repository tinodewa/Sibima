@extends('layouts.home')
@section('title', 'Sikalan')

@section('content')
{{-- head --}}
<div class="head">
    <div class="container">
        <div class="head-title-box FlowupLabels">
            <h2 class="head-title font-weight-normal">Sikalan</h2>
            <h4 class="head-subtitle font-weight-normal">Sistem Informasi Kondisi JALAN</h4>
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
        @foreach ($sikalans as $kecamatan => $data)
            <h5 class="content-title">
                <i class="glyphicon glyphicon-map-marker"></i>
                {{ $kecamatan }}
            </h5>
            <div class="content-inner">
                <div class="row">
                    @foreach ($data as $sikalan)
                        @php
                            $it = 0;
                        @endphp
                        @foreach($sikalanImages->where('sikalan_id', $sikalan->id) as $sikalanImage)
                            @if ($it < 1)
                                <div class="content-item col-md-4">
                                    <a href="{{ route('sibima.sikalan.detail', $sikalan->id) }}" >
                                        <div class="content-item-inner" style="background:url('{{asset('storage/jalan/'.$sikalanImage->filename)}}'); background-size:100%;">
                                            <div class="content-item-address">
                                                <p class="content-item-province">
                                                    {{ $sikalan->kecamatan}}
                                                </p>
                                                <p class="content-item-road">
                                                    {{ $sikalan->nama_ruas_jalan}}
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                            @php
                                $it++;
                            @endphp
                        @endforeach
                        
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection