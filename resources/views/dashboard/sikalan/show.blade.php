@extends('layouts/dashboard')
@section('title', 'Kondisi Jalan')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/home/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="http://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card striped-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Kondisi Jalan</h4>
                </div>
                <div class="card-body">
                    <div class="paket">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nomor Ruas</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->no_ruas}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Kelompok Data Dasar</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->kelompok_data_dasar}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Nama Ruas Jalan</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->nama_ruas_jalan}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Tahun Data</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->tahun_data}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $sikalan->status }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Fungsi</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->fungsi}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Mendukung</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->mendukung}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Uraian Dukungan</label>
                                        <span class="colon">:</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$sikalan->uraian_dukungan}}</p>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header bg-yellow">
                                    <h4 class="card-title">Kodefikasi Kelompok Data</h4>
                                </div>
                                <div class="card-body">
                                    <div class="paket">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kode Bidang Pekerjaan Umum</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kode_bidang_pekerjaan_umum}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 pr-1">
                                                    <div class="form-group">
                                                        <label>Kode Data Dasar Jenis Infrastruktur</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>{{$sikalan->kode_data_dasar_jenis_infrastruktur}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kode Infrastruktur</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kode_infrastruktur}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header bg-yellow ">
                                    <h4 class="card-title">Lokasi</h4>
                                </div>
                                <div class="card-body">
                                    <div class="paket">
                                    <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Provinsi</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->provinsi->nama}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kabupaten / Kota</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kota->nama}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kecamatan</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kecamatan}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kelurahan / Desa</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kelurahan}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Titik Pengenal Ruas Awal</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->titik_pengenal_ruas_awal}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Titik Pengenal Ruas Akhir</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->titik_pengenal_ruas_akhir}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kode Patok</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kode_patok}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Km Awal Ruas</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->km_ruas_awal}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Km Akhir Ruas</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->km_ruas_akhir}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Nama Lintas</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->nama_lintas}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Gambar Peta</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="map-box col-md-12" id="map">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Gambar Jalan</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        @foreach ($sikalan->images as $image)
                                                            <div class="content-item col-md-3">
                                                            <a class="example-image-link" href="{{ asset('storage/jalan/'.$image->filename) }}" data-lightbox="example-1">
                                                                <div class="content-item-inner" style="height:auto;">
                                                                    <img class="example-image" src="{{ asset('storage/jalan/'.$image->filename) }}" style="max-width:100%;">
                                                                </div>
                                                            </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header bg-yellow ">
                                    <h4 class="card-title">Kondisi (Dalam Km)</h4>
                                </div>
                                <div class="card-body">
                                <div class="paket">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Baik</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->baik}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Sedang</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->sedang}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Rusak Ringan</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->rusak_ringan}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Rusak Berat</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->rusak_berat}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Mantap (Baik + Sedang)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->mantap}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 pr-1">
                                                    <div class="form-group">
                                                        <label>Tidak Mantap (Rusak Ringan + Rusak Berat)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>{{$sikalan->tidak_mantap}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header bg-yellow ">
                                    <h4 class="card-title">Data Teknis</h4>
                                </div>
                                <div class="card-body">
                                    <div class="paket">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Panjang (Km)(Sesuai SK)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->panjang}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Lebar Perkerasan Jalan (m)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->lebar}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Lalulintas Harian Rata-Rata Tahunan (LHRT)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>{{$sikalan->lalulintas_harian}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Volume Capacity Ratio (VCR)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->volume_capacity}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Tipe Jalan</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->tipe_jalan}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kapasitan MST (ton)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->kapasitas_mst}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Tipe Perkerasan :</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Tanah / Krikil (m)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->tanah}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5 pl-5">
                                                    <div class="form-group">
                                                        <label>Penetrasi Macadam / Telford (m)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <p>{{$sikalan->telford}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Ashpalt (m)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->ashpalt}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pl-5">
                                                    <div class="form-group">
                                                        <label>Rigid / Beton (m)</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->rigid}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Tahun Penanganan Terakhir</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->tahun_penanganan_terakhir}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Jenis Penanganan</label>
                                                        <span class="colon">:</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <p>{{$sikalan->jenis_penanganan}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card striped-tabled-with-hover">
                                    <div class="card-header bg-yellow ">
                                        <h4 class="card-title">Koordinat (Decimal Degree)</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="paket">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat X Titik Awal Ruas</label>
                                                            <span class="colon">:</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{$sikalan->koordinat_x_awal_ruas}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y Titik Awal Ruas</label>
                                                            <span class="colon">:</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{$sikalan->koordinat_y_awal_ruas}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat X Titik Akhir Ruas</label>
                                                            <span class="colon">:</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{$sikalan->koordinat_x_akhir_ruas}}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y Titik Akhir Ruas</label>
                                                            <span class="colon">:</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p>{{$sikalan->koordinat_y_akhir_ruas}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-3">
                                    <div class="form-group">
                                        <label>Ditolak</label>
                                        <label class="switch">
                                            <input type="checkbox" {{ ($sikalan->status_approve) ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                        <label>Diterima</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ml-3">
                                    <div class="form-group">
                                        <a class="control-icon alert-success" href="{{ route('admin.sikalan.edit', $sikalan->id) }}">
                                            <i class="nc-icon nc-settings-tool-66"></i>
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')
	<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="{{ asset('embedkml/layer/vector/KML.js') }}"></script>
    <script>
        var urlKml = "{{ asset('storage/peta/'.$sikalan->gambar_peta) }}";
        console.log( urlKml);

        var map = new L.Map('map', {center: new L.LatLng(58.4, 43.0), zoom: 50});
		var osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
		var track = new L.KML(urlKml, {async: true});
		console.log(track);
		track.on("loaded", function(e) {
			map.fitBounds(e.target.getBounds());
		});
		map.addLayer(track);
		map.addLayer(osm);
		map.addControl(new L.Control.Layers({}, {'Track':track}));
    </script>
@endsection