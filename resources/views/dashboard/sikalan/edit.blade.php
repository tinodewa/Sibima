@extends('layouts/dashboard')
@section('title', 'Kondisi Jalan')

@section('css')
<style>
    button{
        border: none;
    }
</style>
@endsection

@section('content')
<form action="{{ route('admin.sikalan.update', $sikalan->id)}}" enctype="multipart/form-data" method="POST">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Kondisi Jalan</h4>
                    </div>
                    <div class="card-body">
                        <div class="paket">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                            @endif
                            {{ csrf_field() }}  
                            {{ method_field('PUT') }} 
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Nomor Ruas</label>
                                            <input type="text" class="form-control" placeholder="Jalan Non Tol" value="{{ old('nomor_ruas', $sikalan->nomor_ruas) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kelompok Data Dasar</label>
                                            <input type="text" class="form-control" placeholder="Jalan Non Tol" value="{{ old('kelompok_data_dasar', $sikalan->kelompok_data_dasar) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Nama Ruas Jalan</label>
                                            <input type="text" class="form-control" placeholder="" value="{{ old('nama_ruas_jalan', $sikalan->nama_ruas_jalan) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Tahun Data</label>
                                            <input type="number" class="form-control" placeholder="" value="{{ old('tahun_data', $sikalan->tahun_data) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control" placeholder="Jalan Kabupaten" value="{{ old('status', $sikalan->status) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Fungsi</label>
                                             <select class="form-control" id="fungsi">
                                                <option disabled hidden>Choose</option>
                                                <option {{ $sikalan->fungsi == 'JLP' ? 'selected' : ''}} value="1">JLP</option>
                                                <option {{ $sikalan->fungsi == 'JKP-4' ? 'selected' : ''}} value="2">JKP-4</option>
                                                <option {{ $sikalan->fungsi == 'Jling-P' ? 'selected' : ''}} value="3">Jling-P</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label>Mendukung</label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="strategis" {{ $sikalan->mendukung == 'strategis' ? 'checked' : ''}}>
                                                    <span class="form-check-sign"></span>
                                                    Strategis
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="non-strategis" {{ $sikalan->mendukung == 'non-strategis' ? 'checked' : ''}}>
                                                    <span class="form-check-sign"></span>
                                                    Non Strategis
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Uraian Dukungan</label>
                                            <input type="text" class="form-control" placeholder="Nama Paket" value="{{ old('uraian_dukungan', $sikalan->uraian_dukungan) }}">
                                        </div>
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
                                                            <input type="text" class="form-control" placeholder="02" value="{{ old('kode_bidang_pekerjaan_umum', $sikalan->kode_bidang_pekerjaan_umum) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                            <label>Kode Data Dasar Jenis Infrastruktur</label>
                                                            <input type="text" class="form-control" placeholder="01" value="{{ old('kode_data_dasar_jenis_infrastruktur', $sikalan->kode_data_dasar_jenis_infrastruktur) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kode Infrastruktur</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kode_infrastruktur', $sikalan->kode_infrastruktur) }}">
                                                        </div>
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
                                                            <select class="form-control" id="provinsi">
                                                                <option disabled hidden>Choose</option>
                                                                <option {{ $sikalan->provinsi == 'Kalimantan Timur' ? 'selected' : ''}} value="Kalimantan Timur">Kalimantan Timur</option>
                                                                <option {{ $sikalan->provinsi == 'Kalimantan Barat' ? 'selected' : ''}} value="Kalimantan Barat">Kalimantan Barat</option>
                                                                <option {{ $sikalan->provinsi == 'Kalimantan Utara' ? 'selected' : ''}} value="Kalimantan Utara">Kalimantan Utara</option>
                                                                <option {{ $sikalan->provinsi == 'Kalimantan Selatan' ? 'selected' : ''}} value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kabupaten / Kota</label>
                                                            <select class="form-control" id="kabupatenkota">
                                                                <option disabled hidden>Choose</option>
                                                                <option {{ $sikalan->kabupatenkota == 'Kutai Timur' ? 'selected' : ''}} value="Kutai Timur">Kutai Timur</option>
                                                                <option {{ $sikalan->kabupatenkota == 'Kutai Utara' ? 'selected' : ''}} value="Kutai Utara">Kutai Utara</option>
                                                                <option {{ $sikalan->kabupatenkota == 'Kutai Barat' ? 'selected' : ''}} value="Kutai Barat">Kutai Barat</option>
                                                                <option {{ $sikalan->kabupatenkota == 'Kutai Selatan' ? 'selected' : ''}} value="Kutai Selatan">Kutai Selatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kecamatan', $sikalan->kecamatan) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kelurahan / Desa</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kelurahandesa', $sikalan->kelurahandesa) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Titik Pengenal Ruas Awal</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('titik_pengenal_ruas_awal', $sikalan->titik_pengenal_ruas_awal) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Titik Pengenal Ruas Akhir</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('titik_pengenal_ruas_akhir', $sikalan->titik_pengenal_ruas_akhir) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kode Patok</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kode_patok', $sikalan->kode_patok) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Km Awal Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('km_awal_ruas', $sikalan->km_awal_ruas) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Km Akhir Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('km_akhir_ruas', $sikalan->km_akhir_ruas) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Nama Lintas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('nama_lintas', $sikalan->nama_lintas) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Gambar Peta</label>
                                                            <input type="file" class="form-control" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Foto Jalan</label>
                                                            <input type="file" class="form-control" multiple>
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_baik', $sikalan->kondisi_baik) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Sedang</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_sedang', $sikalan->kondisi_sedang) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Rusak Ringan</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_rusak_ringan', $sikalan->kondisi_rusak_ringan) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Rusak Berat</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_rusak_berat', $sikalan->kondisi_rusak_berat) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Mantap (Baik + Sedang)</label>
                                                            <input type="text" class="form-control" placeholder="" disabled value="{{ old('kondisi_mantap', $sikalan->kondisi_mantap) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Tidak Mantap (Rusak Baik + Rusak Sedang)</label>
                                                            <input type="text" class="form-control" placeholder="" disabled value="{{ old('kondisi_ridak_mantap', $sikalan->kondisi_ridak_mantap) }}">
                                                        </div>
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('panjang_jalan', $sikalan->panjang_jalan) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Lebar Perkerasan Jalan (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('lebar_perkerasan_jalan', $sikalan->lebar_perkerasan_jalan) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Lalulintas Harian Rata-Rata Tahunan (LHRT)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('lalulintas_harian_jalan', $sikalan->lalulintas_harian_jalan) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Volume Capacity Ratio (VCR)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('volume_capacity_jalan', $sikalan->volume_capacity_jalan) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Tipe Jalan</label>
                                                            <select class="form-control" id="tipe">
                                                                <option disabled selected hidden>Choose</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kapasitan MST (ton)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kapasitan_mst_jalan', $sikalan->kapasitan_mst_jalan) }}">
                                                        </div>
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('tanah_kerikil', $sikalan->tanah_kerikil) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pl-5">
                                                        <div class="form-group">
                                                            <label>Penetrasi Macadam / Telford (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('penetrasi_macadam', $sikalan->penetrasi_macadam) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pl-5">
                                                        <div class="form-group">
                                                            <label>Ashpalt (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('ashpalt', $sikalan->ashpalt) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pl-5">
                                                        <div class="form-group">
                                                            <label>Rigid / Beton (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('rigid_beton', $sikalan->rigid_beton) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Tahun Penanganan Terakhir</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('tahun_penanganan_terakhir', $sikalan->tahun_penanganan_terakhir) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <label>Jenis Penanganan</label>
                                                            </div>
                                                            <div class="form-check form-check-radio">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="peningkatan">
                                                                    <span class="form-check-sign"></span>
                                                                    Peningkatan
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="pemeliharaan_berkala">
                                                                    <span class="form-check-sign"></span>
                                                                    Pemeliharaan Berkala
                                                                </label>
                                                            </div>
                                                        </div>
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_x_titik_awal_ruas', $sikalan->koordinat_x_titik_awal_ruas) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y Titik Awal Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_y_titik_awal_ruas', $sikalan->koordinat_y_titik_awal_ruas) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat X Titik Akhir Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_x_titik_akhir_ruas', $sikalan->koordinat_x_titik_akhir_ruas) }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y Titik Akhir Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_y_titik_akhir_ruas', $sikalan->koordinat_y_titik_akhir_ruas) }}">
                                                        </div>
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
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        <label>Diterima</label>
                                    </div>
                                </div>
                            </div>
                            <a class="ml-3 control-icon btn-fill btn-info" data-toggle="modal" data-target="#myModal2" href="#">
                                Simpan
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mini Confirmation -->
    <div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                </div>
                <div class="modal-body text-center">
                    <p>Apakah anda sudah yakin?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn control-icon btn-fill btn-info">Ya</button>
                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Confirmation -->
@endsection