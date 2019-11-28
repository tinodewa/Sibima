@extends('new/master')
@section('title','Sikombatan Baru')

@section('content')
<div class="container-box">

  {{-- --  --  --  --  --  -- -- SIDEBAR LEFT --  --  --  --  -- -- -- --}}
  <div class="sidebar-left" id="mySidenav">
      <div class="left-head">
        <h1 class="">SIJANTAN</h1>
        <a class="closebtn" id="closebtn" href="javascript:void(0)" onclick="closeNav()"><i class="icon ion-md-close sidebar-left__icon"></i></a>
        <div class="dropdown">
        <a class="openmenu" id="openmenu" href="javascript:void(0)" onclick="openMenu()">Menu <i class="icon ion-md-arrow-dropdown sidebar-left__icon-dropdown"></i></a>
        <a class="closemenu" id="closemenu" href="javascript:void(0)" onclick="closeMenu()">Menu <i class="icon ion-md-arrow-dropup sidebar-left__icon-dropdown"></i></a>
        </div>
        <div class="dropdown-content cl-effect-11" id="dropdown-content">
            <ul class="link-menu">
                <li class="link-menu__item">
                    <a href="#" class="link-menu__link">Sikombatan</a>
                </li>
                <li class="link-menu__item">
                    <a href="#" class="link-menu__link">Sikalan</a>
                </li>
                <li class="link-menu__item">
                    <a href="#" class="link-menu__link">Artikel</a>
                </li>
                <li class="link-menu__item">
                    <a href="#" class="link-menu__link">Galeri</a>
                </li>
                <li class="link-menu__item">
                    <a href="#" class="link-menu__link">Profil</a>
                </li>
            </ul>
        </div>
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
            <p class="form-text">Pilih <span class="form-title">Jembatan</span></p>
            <select data-placeholder="Pilih Jembatan..." class="chosen-select form-control chosen" tabindex="2">
            <option value=""></option>
            <option value="Jembatan Sei Benu Muda Kiri">Jembatan Sei Benu Muda Kiri</option>
            <option value="Jembatan Sui Sekrat">Jembatan Sui Sekrat</option>
            <option value="Jembatan Batu Balai">Jembatan Batu Balai</option>
            <option value="Jembatan Long Mesangat">Jembatan Long Mesangat</option>
            <option value="Jembatan Kelinjau II">Jembatan Kelinjau II</option>
          </select>
        </div>
        <div class="form-group mt-5 submit-group">
            <button class="btn btn-primary button-submit" id="submitBtn">Submit</button>
        </div>
    </div>
    </div>
    
    <div class="row">
    <div class="footer col-12 text-center">
    <p class="text-center">©SIJANTAN (Sistem Informasi Jalan Dan Jembatan) - 2019</p>
    </div>
    </div>


  </div>

  {{-- --  --  --  --  --  -- -- MAPS --  --  --  --  -- -- -- --}}
  <div class="maps-box"  id="mapsbox">
  
  <div class="menu">
    <span class="openbtn" id="openbtn" onclick="openNav()"><i class="icon ion-md-menu openbtn__icon"></i></span>
  </div>
  

  </div>

  {{-- --  --  -- --   -- -- -- SIDEBAR RIGHT -- -- --  --  --  --  -- --}}
  <div class="sidebar-right">
      <div class="lokasi-box row">
          <div class="lokasi-head col-11 mx-auto mb-3">
            <i class="icon ion-md-pin lokasi-head__icon"></i>
            <p class="lokasi-title text-center">Jembatan Sei Benu Muda Kiri</p>
          </div>
          <div class="lokasi-body">
              <p class="lokasi-paragraf">Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari | Jembatan Rangka</p>
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
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ asset('storage/jembatan/1574148201_jembatan-sei-benu-muda-kiri-1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('storage/jembatan/1574148201_jembatan-sei-benu-muda-kiri-2.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('storage/jembatan/1574148201_jembatan-sei-benu-muda-kiri-3.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('storage/jembatan/1574148201_jembatan-sei-benu-muda-kiri-4.png') }}" class="d-block w-100" alt="...">
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

    
    
    {{-- ///////////////////////////////////////////////////////////////////// --}}
    {{-- ///Data Umum Dan Lain Lain --}}

    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-4">Data Umum</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Nomor Jembatan</div>
                        <div class="detail-inner-text">1</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Nama Jembatan</div>
                        <div class="detail-inner-text">Jembatan Sei Benu Muda Kiri</div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Nama Jalan</div>
                        <div class="detail-inner-text">Jl. Jbt Benu Muda Kiri - Jbt. Himba Lestari</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Kecamatan</div>
                        <div class="detail-inner-text">Sanggatta Selatan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-4">Dimensi</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Panjang (m)</div>
                        <div class="detail-inner-text">30 Meter</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Lebar (m)</div>
                        <div class="detail-inner-text">6 Meter</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Jumlah Bentang</div>
                        <div class="detail-inner-text">1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-4">Tipe/Kondisi</div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Tipe Bangunan Atas</div>
                        <div class="detail-inner-text">Rangka</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Kondisi Bangunan Atas</div>
                        <div class="detail-inner-text">Baik</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Tipe Bangunan Bawah</div>
                        <div class="detail-inner-text">Abutmen Beton</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Kondisi Bangunan Bawah</div>
                        <div class="detail-inner-text">Baik</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Tipe Fondasi</div>
                        <div class="detail-inner-text">-</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Kondisi Fondasi</div>
                        <div class="detail-inner-text">-</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="detail-inner-title">Tipe Lantai</div>
                        <div class="detail-inner-text">Beton</div>
                    </div>
                    <div class="col-6">
                        <div class="detail-inner-title">Kondisi Lantai</div>
                        <div class="detail-inner-text">Baik</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mb-4">
        <div class="col-11 mx-auto">
            <div class="detail-box">
                <div class="detail-title mb-5">Lainnya</div>
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
<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<script src="{{ asset('embedkml/layer/vector/KML.js') }}"></script>


<script>

    $('#submitBtn').click(function(){
        var urlKml = "{{ asset('storage/peta/1573974644_Contoh_Ruas_Jalan.kml') }}";
        console.log( urlKml);

        var map = new L.Map('mapsbox', {center: new L.LatLng(58.4, 43.0), zoom: 50});
        var osm = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        var track = new L.KML(urlKml, {async: true});
        console.log(track);
        track.on("loaded", function(e) {
            map.fitBounds(e.target.getBounds());
        });
        map.addLayer(track);
        map.addLayer(osm);
        map.addControl(new L.Control.Layers({}, {'Track':track}));
    });
</script>



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

function openMenu(){
document.getElementById("dropdown-content").style.display = "block";
document.getElementById("openmenu").style.display = "none";
document.getElementById("closemenu").style.display = "block";
}


function closeMenu(){
document.getElementById("dropdown-content").style.display = "none";
document.getElementById("closemenu").style.display = "none";
document.getElementById("openmenu").style.display = "block";
}
</script>
@endsection