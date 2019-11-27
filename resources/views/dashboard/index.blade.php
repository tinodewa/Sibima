@extends('layouts/dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Sikalan</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th class="w-25">Gambar Jalan</th>
                            <th>Nama Jalan</th>
                            <th>Kecamatan</th>
                            <th>Tanggal Input</th>
                            <th>jam Input</th>
                            <th>Kontrol</th>
                        </thead>
                        <tbody>
                            @foreach ($sikalans as $sikalan)
                                <tr>
                                    <td>
                                        <div class="img-box">
                                            @php
                                                $it = 0;
                                            @endphp
                                            @foreach ($sikalanImages as $sikalanImage)
                                                @if ( $it == 0 && $sikalanImage->sikalan_id = $sikalan->id)
                                                    <img src="{{ asset('storage/jalan/'.$sikalanImage->filename) }}" alt="bromo" class="img-fluid">
                                                @endif
                                                @php
                                                    $it++;
                                                @endphp
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{ $sikalan->nama_ruas_jalan }}</td>
                                    <td>{{ $sikalan->kecamatan }}</td>
                                    <td>{{ $sikalan->created_at->format('l, d F Y') }}</td>
                                    <td>{{ $sikalan->created_at->format('H.i') }} WIB</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-info" href="{{ route('admin.sikalan.show', $sikalan->id) }}">
                                            <i class="nc-icon nc-paper-2"></i>
                                            More
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Sikombatan</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th class="w-25">Gambar Jembatan</th>
                            <th>Nama Jembatan</th>
                            <th>Kecamatan</th>
                            <th>Tanggal Input</th>
                            <th>jam Input</th>
                            <th>Kontrol</th>
                        </thead>
                        <tbody>
                            @foreach ($sikombatans as $sikombatan)
                                <tr>
                                    <td>
                                        <div class="img-box">
                                            @php
                                                $it = 0;
                                            @endphp
                                            @foreach ($sikombatanImages as $sikombatanImage)
                                                @if ( $it == 0 && $sikombatanImage->sikombatan_id = $sikombatan->id)
                                                    <img src="{{ asset('storage/jembatan/'.$sikombatanImage->filename) }}" alt="bromo" class="img-fluid">
                                                @endif
                                                @php
                                                    $it++;
                                                @endphp
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{ $sikombatan->nama_jembatan }}</td>
                                    <td>{{ $sikombatan->kecamatan }}</td>
                                    <td>{{ $sikombatan->created_at->format('l, d F Y') }}</td>
                                    <td>{{ $sikombatan->created_at->format('H.i') }} WIB</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-info" href="{{ route('admin.sikombatan.show', $sikombatan->id) }}">
                                            <i class="nc-icon nc-paper-2"></i>
                                            More
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection