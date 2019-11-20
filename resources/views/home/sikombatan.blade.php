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
        @foreach ($sikombatans as $kecamatan => $data)
            <h5 class="content-title">
                <i class="glyphicon glyphicon-map-marker"></i>
                {{ $kecamatan }}
            </h5>
            <div class="content-inner">
                <div class="row">
                    @foreach ($data as $sikombatan)
                        @php
                            $it = 0;
                        @endphp
                        @foreach($sikombatanImages->where('sikombatan_id', $sikombatan->id) as $sikombatanImage)
                            @if ($it < 1)
                                <div class="content-item col-md-4">
                                    <a href="{{ route('sibima.sikombatan.detail', $sikombatan->id) }}" >
                                        <div class="content-item-inner" style="background:url('{{asset('storage/jembatan/'.$sikombatanImage->filename)}}') no-repeat; background-size:cover;">
                                            <div class="content-item-address">
                                                <p class="content-item-province">
                                                    {{ $sikombatan->sikalan->kecamatan}}
                                                </p>
                                                <p class="content-item-road">
                                                    {{ $sikombatan->nama_jembatan}}
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
                    <div class="garis-batas"><hr/></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection