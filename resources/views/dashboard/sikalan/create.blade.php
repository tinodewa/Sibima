@extends('layouts/dashboard')
@section('title', 'Kondisi Jalan')

@section('content')
<form action="{{ route('admin.sikalan.store')}}" enctype="multipart/form-data" method="POST">
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Kondisi Jalan</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        {{ csrf_field() }}
                        <div class="paket">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Nomor Ruas</label>
                                            <input type="text" class="form-control" placeholder="Jalan Non Tol" value="{{ old('nomor_ruas') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kelompok Data Dasar</label>
                                            <input type="text" class="form-control" placeholder="Jalan Non Tol" value="{{ old('data_dasar') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Nama Ruas Jalan</label>
                                            <input type="text" class="form-control" placeholder="" value="{{ old('nama_ruas') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Tahun Data</label>
                                            <input type="number" class="form-control" placeholder="" value="{{ old('tahun_data') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control" placeholder="Jalan Kabupaten" value="{{ old('status') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Fungsi</label>
                                             <select class="form-control" id="fungsi">
                                                <option disabled selected hidden>Choose</option>
                                                <option value="JLP">JLP</option>
                                                <option value="JKP-4">JKP-4</option>
                                                <option value="Jling-P">Jling-P</option>
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
                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="strategis">
                                                    <span class="form-check-sign"></span>
                                                    Strategis
                                                </label>
                                            </div>
                                            <div class="form-check form-check-radio">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="non-strategis">
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
                                            <input type="text" class="form-control" placeholder="Nama Paket" value="{{ old('uraian_dukungan') }}">
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
                                                            <input type="text" class="form-control" placeholder="02" value="{{ old('kode_bidang_pekerjaan_umum') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                            <label>Kode Data Dasar Jenis Infrastruktur</label>
                                                            <input type="text" class="form-control" placeholder="01" value="{{ old('kode_data_dasar_jenis_infrastruktur') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kode Infrastruktur</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kode_infrastruktur') }}">
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
                                                            <select class="form-control" id="fungsi">
                                                                <option disabled selected hidden>Choose</option>
                                                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kabupaten / Kota</label>
                                                            <select class="form-control" id="fungsi">
                                                                <option disabled selected hidden>Choose</option>
                                                                <option value="Kutai Timur">Kutai Timur</option>
                                                                <option value="Kutai Utara">Kutai Utara</option>
                                                                <option value="Kutai Barat">Kutai Barat</option>
                                                                <option value="Kutai Selatan">Kutai Selatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kecamatan</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kecamatan') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kelurahan / Desa</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kelurahan_desa') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Titik Pengenal Ruas Awal</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('titik_pengenal_ruas_awal') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Titik Pengenal Ruas Akhir</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('titik_pengenal_ruas_akhir') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Kode Patok</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kode_patok') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Km Awal Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('km_ruas_awal') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Km Akhir Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('km_ruas_akhir') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Nama Lintas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('nama_lintas') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Gambar Peta</label>
                                                            <input type="file" multiple data-upload="" accept="image/*" class="" name="gambar_peta">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Foto Jalan</label>
                                                            <input type="file" multiple data-upload="" accept="image/*" class="" name="foto_jalan>
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_baik') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Sedang</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_sedang') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Rusak Ringan</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_rusak_ringan') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Rusak Berat</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kondisi_rusak_berat') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Mantap (Baik + Sedang)</label>
                                                            <input type="text" class="form-control" placeholder="" disabled  value="{{ old('kondisi_mantap') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Tidak Mantap (Rusak Baik + Rusak Sedang)</label>
                                                            <input type="text" class="form-control" placeholder="" disabled value="{{ old('kondisi_tidak_mantap') }}">
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('panjang_jalan') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Lebar Perkerasan Jalan (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('lebar_perkerasan_jalan') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Lalulintas Harian Rata-Rata Tahunan (LHRT)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('lalulintas_harian_jalan') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Volume Capacity Ratio (VCR)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('volume_capacity_jalan') }}">
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('kapasitas_mst_jalan') }}">
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('tanah_kerikil') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pl-5">
                                                        <div class="form-group">
                                                            <label>Penetrasi Macadam / Telford (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('penetrasi_macadam') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pl-5">
                                                        <div class="form-group">
                                                            <label>Ashpalt (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('ashpalt') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pl-5">
                                                        <div class="form-group">
                                                            <label>Rigid / Beton (m)</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('rigid_beton') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Tahun Penanganan Terakhir</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('tahun_penanganan_terakhir') }}">
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
                                                                    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="pemeliharaan berkala">
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
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_x_titik_awal_ruas') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y Titik Awal Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_y_titik_awal_ruas') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat X Titik Akhir Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_x_titik_akhir_ruas') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 pr-1">
                                                        <div class="form-group">
                                                            <label>Koordinat Y Titik Akhir Ruas</label>
                                                            <input type="text" class="form-control" placeholder="" value="{{ old('koordinat_y_titik_akhir_ruas') }}">
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
                            <button type="button" class="ml-3 control-icon btn-fill btn-info" data-toggle="modal" data-target="#myModal2" href="#">
                                Simpan
                            </button>
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
                    <button type="submit" class="btn control-icon btn-fill btn-info" >Ya</button>
                    <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
    <!--  End Confirmation -->
@endsection

@section('js')
@endsection