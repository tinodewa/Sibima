@extends('new/master')
@section('title','Sikalan Baru')

@section('content')
<div class="container-box">

  {{-- --  --  --  --  --  -- -- SIDEBAR LEFT --  --  --  --  -- -- -- --}}
  <div class="sidebar-left" id="mySidenav">
      <div class="left-head">
        <h1 class="">SIJANTAN</h1>
        <a class="closebtn" id="closebtn" href="javascript:void(0)" onclick="closeNav()"><i class="icon ion-md-close sidebar-left__icon"></i></a>
      </div>

    <div class="row">
    <div class="form-box col-11 mx-auto">
        <div class="form-group">
            <p class="form-text">Pilih <span class="form-title">Provinsi</span></p>
            <select data-placeholder="Pilih Provinsi..." class="chosen-select form-control chosen" tabindex="2">
            <option value=""></option>
            <option value="kalimantan timur">Kalimantan Timur</option>
            <option value="kalimantan utara">Kalimantan Utara</option>
            <option value="kalimantan barat">Kalimantan Barat</option>
            <option value="kalimantan selatan">Kalimantan Selatan</option>
            <option value="kalimantan tengah">Kalimantan Tengah</option>
          </select>
        </div>
        <div class="form-group mt-5">
            <p class="form-text">Pilih <span class="form-title">Kabupaten/Kota</span></p>
            <select data-placeholder="Pilih Kabupaten/Kota..." class="chosen-select form-control chosen" tabindex="2">
            <option value=""></option>
            <option value="Kabupaten Berau">Kabupaten Berau</option>
            <option value="Kabupaten Kutai Barat">Kabupaten Kutai Barat</option>
            <option value="Kabupaten Kutai Timur">Kabupaten Kutai Timur</option>
            <option value="Kota Balikpapan">Kota Balikpapan</option>
            <option value="Kota Samarinda">Kota Samarinda</option>
            <option value="Kota Bontang">Kota Bontang</option>
          </select>
        </div>
        <div class="form-group mt-5">
            <p class="form-text">Pilih <span class="form-title">Kecamatan</span></p>
            <select data-placeholder="Pilih Kecamatan..." class="chosen-select form-control chosen" tabindex="2">
            <option value=""></option>
            <option value="Batu Ampar">Batu Ampar</option>
            <option value="Bengalon">Bengalon</option>
            <option value="Busang">Busang</option>
            <option value="Karangan">Karangan</option>
            <option value="Sangatta Selatan">Sangatta Selatan</option>
            <option value="Sangatta Utara">Sangatta Utara</option>
          </select>
        </div>
        <div class="form-group mt-5">
            <p class="form-text">Pilih <span class="form-title">Jalan</span></p>
            <select data-placeholder="Pilih Jalan..." class="chosen-select form-control chosen" tabindex="2">
            <option value=""></option>
            <option value="Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari">Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari</option>
            <option value="Jl. Jbt. Himba Lestari - Smp. 3 Beno Harapan">Jl. Jbt. Himba Lestari - Smp. 3 Beno Harapan</option>
            <option value="Jl. Km. 8 - Simp. Kantor Camat Batu Ampar">Jl. Km. 8 - Simp. Kantor Camat Batu Ampar</option>
            <option value="Jl. Simp. K.Camat B.Ampar - Simp. 3 Ds Mawai Indah">Jl. Simp. K.Camat B.Ampar - Simp. 3 Ds Mawai Indah</option>
            <option value="Jl. Simp. Km. 3 - Batu Timbau">Jl. Simp. Km. 3 - Batu Timbau</option>
          </select>
        </div>
        <div class="form-group mt-5 submit-group">
            <button class="btn btn-primary button-submit">Submit</button>
        </div>
    </div>
    </div>
    

    <div class="footer text-center">
    <p class="text-center">© SIJANTAN (Sistem Informasi Jalan Dan Jembatan) - 2019</p>
    </div>


  </div>

  {{-- --  --  --  --  --  -- -- MAPS --  --  --  --  -- -- -- --}}
  <div class="maps-box" id="mapsbox">
  
  <div class="menu">
    <span class="openbtn" id="openbtn" onclick="openNav()"><i class="icon ion-md-menu sidebar-left__icon"></i></span>
  </div>

  Maps

  </div>

  {{-- --  --  -- --   -- -- -- SIDEBAR RIGHT -- -- --  --  --  --  -- --}}
  <div class="sidebar-right">
      <div class="lokasi-box">
          <div class="lokasi-head mx-auto mb-3">
            <i class="icon ion-md-pin lokasi-head__icon"></i>
            <p class="lokasi-title text-center">Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari</p>
          </div>
          <div class="lokasi-body">
              <p class="lokasi-paragraf">Desa Himba Lestari | Jalan Non Tol</p>
              <hr>
              <div class="latitude-box">
                <i class="icon ion-md-locate latitude-box__icon"></i>
                <p class="">117,1335752991, 0,7048846718</p>
              </div>
          </div>
          
      </div>
     
      
    <div class="lokasi-footer row mt-3">
        
    <div class="col-6">
            <div class="span-card"> Provinsi <br><span class="bold">Kalimantan Timur</span></div    >
        </div>
        <div class="col-6">
            <div class="span-card"> Kabupaten/Kota <br> <span class="bold">Kutai Timur</span></div>
        </div>
        <div class="col-12">
            <div class="span-card"> Kecamatan <br> <span class="bold">Sanggatta Selatan</span></div>
        </div>
    </div>

    {{-- -- Slider Image -- --}}
    <div class="row my-4">
        <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('storage/jalan/1574234172_sikalan 1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('storage/jalan/1574234172_sikalan 2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('storage/jalan/1574149091_jembatan-sei-benu-muda-kiri-3.png') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-3">Data Umum</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Nomor Jalan</div>
                        <div class="detail-inner-text">15.01.01</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Kecamatan</div>
                        <div class="detail-inner-text">Sanggatta Selatan</div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Akses ke Jalan</div>
                        <div class="detail-inner-text">Jalan entah apa</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Nama Jalan</div>
                        <div class="detail-inner-text">Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-3">Dimensi</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Panjang Ruas</div>
                        <div class="detail-inner-text">26478 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Lebar</div>
                        <div class="detail-inner-text">6 Meter</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-3">Panjang Tiap Jenis Permukaan</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Aspal / Penetrasi / Macadam</div>
                        <div class="detail-inner-text">24801 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Telford / Kerikil</div>
                        <div class="detail-inner-text">1677 Kilometer</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Perkerasan Beton</div>
                        <div class="detail-inner-text">0 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Tanah / Belum Tembus</div>
                        <div class="detail-inner-text">0 Kilometer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-3">Panjang Tiap Kondisi</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Baik (Km)</div>
                        <div class="detail-inner-text">10326 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Baik (%)</div>
                        <div class="detail-inner-text">39.00 %</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Sedang (Km)</div>
                        <div class="detail-inner-text">959 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Sedang (%)</div>
                        <div class="detail-inner-text">3.62 %</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Rusak Ringan (Km)</div>
                        <div class="detail-inner-text">15192 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Rusak Ringan (%)</div>
                        <div class="detail-inner-text">57.38 %</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Rusak Berat (Km)</div>
                        <div class="detail-inner-text">0 Kilometer</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Rusak Berat (%)</div>
                        <div class="detail-inner-text">0.00 %</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-3">Lainnya</div>
                <div class="row">
                    <div class="col-12">
                        <div class="detail-inner-title">Informasi</div>
                        <div class="detail-inner-text">Test Informasi Yang Sangat Penting Lainnya</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- -- End of sidebar right -- --}}
</div>
</div>

@endsection


@section('js')
<script type="text/javascript">
function openNav() {
  document.getElementById("mySidenav").style.transition = "all .4s ease";
  document.getElementById("mapsbox").style.transition = "all .4s ease";
  document.getElementById("mySidenav").style.position = "relative";
  document.getElementById("mySidenav").style.left = "0";
  document.getElementById("mapsbox").style.width = "50%";
  document.getElementById("openbtn").style.display = "none";
  document.getElementById("closebtn").style.display = "block";
}

function closeNav() {  
  document.getElementById("mySidenav").style.transition = "all .4s ease";
  document.getElementById("mapsbox").style.transition = "all .4s ease";
  document.getElementById("mySidenav").style.position = "absolute";
  document.getElementById("mySidenav").style.left = "-22%";
  document.getElementById("mapsbox").style.width = "72%";
  document.getElementById("openbtn").style.display = "block";
  document.getElementById("closebtn").style.display = "none";

}
</script>
@endsection