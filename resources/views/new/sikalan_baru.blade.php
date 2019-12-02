@extends('new/master')
@section('title','Sikalan Baru')

@section('content')
<div class="container-box">

  {{-- --  --  --  --  --  -- -- SIDEBAR LEFT --  --  --  --  -- -- -- --}}
  <div class="sidebar-left" id="mySidenav">
      <div class="left-head">
        <a href="{{ route('sibima.home') }}" class="text-white main-link"><h1 class="">SIJANTAN</h1></a>
        <a class="closebtn" id="closebtn" href="javascript:void(0)" onclick="closeNav()"><i class="icon ion-md-close sidebar-left__icon"></i></a>
      
            <div class="dropdown">
            <a class="openmenu" id="openmenu" href="javascript:void(0)" onclick="openMenu()">Menu <i class="icon ion-md-arrow-dropdown sidebar-left__icon-dropdown"></i></a>
            <a class="closemenu" id="closemenu" href="javascript:void(0)" onclick="closeMenu()">Menu <i class="icon ion-md-arrow-dropup sidebar-left__icon-dropdown"></i></a>
            </div>
            <div class="dropdown-content cl-effect-11" id="dropdown-content">
                <ul class="link-menu">
                    <li class="link-menu__item">
                        <a href="{{ route('sibima.sikombatan') }}" class="link-menu__link">Jembatan</a>
                    </li>
                    <li class="link-menu__item">
                        <a href="{{ route('sibima.sikalan') }}" class="link-menu__link">Jalan</a>
                    </li>
                    <li class="link-menu__item">
                        <a href="{{ route('sibima.artikel') }}" class="link-menu__link">Artikel</a>
                    </li>
                    <li class="link-menu__item">
                        <a href="{{ route('sibima.galeri') }}" class="link-menu__link">Galeri</a>
                    </li>
                    <li class="link-menu__item">
                        <a href="{{ route('sibima.profil') }}" class="link-menu__link">Profil</a>
                    </li>
                </ul>
            </div>

        </div>

    <div class="row">
    <div class="icon-box col-11 mx-auto"></div>
    <div class="form-box col-11 mx-auto">
        {{-- <div class="form-group">
            <p class="form-text">Pilih <span class="form-title">Provinsi</span></p>
            <select id="selectProvinsi" data-placeholder="Pilih Provinsi..." class="chosen-select form-control chosen" tabindex="2">
                <option default selected disabled value="">Pilih Provinsi</option>
                
                @foreach ($provinsis as $provinsi)
                    <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-5">
            <p class="form-text">Pilih <span class="form-title">Kabupaten/Kota</span></p>
            <select id="selectKota" data-placeholder="Pilih Kabupaten/Kota..." class="form-control" tabindex="2">
                <option default selected disabled value="">Pilih Kabupaten/Kota</option>
                
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
        </div> --}}
        <form action="{{ route('sibima.sikalan')}}" method="GET">
            <div class="form-group mt-5">
                <p class="form-text">Pilih <span class="form-title">Jalan</span></p>
                <select name="id" data-placeholder="Pilih Jalan..." class="chosen-select form-control chosen" tabindex="2">
                    <option value="" selected default disabled></option>
                    @foreach ($sikalans as $sikalan)
                        <option value="{{$sikalan->id}}">{{$sikalan->nama_ruas_jalan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-5 submit-group">
                <button class="btn btn-primary button-submit" id="submitBtn">Submit</button>
            </div>
        </form>
    </div>
    </div>
    

    <div class="footer text-center">
    <p class="text-center">© SIJANTAN (Sistem Informasi Jalan Dan Jembatan) - 2019</p>
    </div>


  </div>

  {{-- --  --  --  --  --  -- -- MAPS --  --  --  --  -- -- -- --}}
  <div class="maps-box" id="mapsbox">
  
  <div class="menu" id="menu">
    <span class="openbtn" id="openbtn" onclick="openNav()"><i class="icon ion-md-menu openbtn__icon"></i></span>
  </div>
  

  </div>

  {{-- --  --  -- --   -- -- -- SIDEBAR RIGHT -- -- --  --  --  --  -- --}}
    <div class="sidebar-right">
        <div class="lokasi-box">
            <div class="lokasi-head mx-auto">
                <i class="icon ion-md-pin lokasi-head__icon"></i>
                @if ($jalan)
                    <p class="lokasi-title text-center">{{$jalan->nama_ruas_jalan}}</p>    
                @else
                    <p class="lokasi-title text-center">Pilih Ruas Jalan</p>    
                @endif
            </div>
            <div class="lokasi-body">
                @if ($jalan)
                    <p class="lokasi-paragraf">{{$jalan->kelurahan}} | {{$jalan->fungsi}}</p>      
                @else
                    <p class="lokasi-paragraf">- | -</p>   
                @endif
               
                <hr>
                <div class="latitude-box">
                    <i class="icon ion-md-locate latitude-box__icon"></i>
                    @if ($jalan)
                        <p class="">{{$jalan->koordinat_x_awal_ruas}} , {{$jalan->koordinat_y_awal_ruas}}</p>       
                    @else
                        <p class="">- , -</p>  
                    @endif
                    
                </div>
            </div>
        </div>
     
      
        <div class="lokasi-footer row mt-3">
            
            @if ($jalan)
                <div class="col-6">
                    @foreach ($provinsis as $provinsi)
                        @if ($provinsi->id == $jalan->provinsi_id)
                            <div class="span-card"> Provinsi <br><span class="bold">{{$provinsi->nama}}</span></div    >
                        @endif
                    @endforeach
                    </div>
                    <div class="col-6">
                        @foreach ($kotas as $kota)
                            @if ($kota->id == $jalan->kota_id)
                                <div class="span-card"> Kabupaten/Kota <br> <span class="bold">{{$kota->nama}}</span></div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-12">
                        <div class="span-card"> Kecamatan <br> <span class="bold">{{$jalan->kecamatan}}</span></div>
                    </div>
                </div>

                {{-- -- Slider Image -- --}}
                <div class="row my-4">
                    <div class="col-lg-12 col-md-7 col-sm-7 mx-auto mb-sm-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @foreach ($sikalanImages as $key => $sikalanImage)
                                @if ($key == 0)
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/jalan/'.$sikalanImage->filename) }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/jalan/'.$sikalanImage->filename) }}" class="d-block w-100" alt="...">
                                    </div>
                                @endif
                            @endforeach
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
                                    <div class="detail-inner-text">{{$jalan->no_ruas}}</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Kecamatan</div>
                                    <div class="detail-inner-text">S{{$jalan->kecamatan}}</div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <div class="detail-inner-title">Akses ke Jalan</div>
                                    <div class="detail-inner-text">-</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Nama Jalan</div>
                                    <div class="detail-inner-text">{{$jalan->nama_ruas_jalan}}</div>
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
                                    <div class="detail-inner-text">{{ $jalan->panjang }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Lebar</div>
                                    <div class="detail-inner-text">{{ $jalan->lebar }} Meter</div>
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
                                    <div class="detail-inner-text">{{ $jalan->ashpalt }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Telford / Kerikil</div>
                                    <div class="detail-inner-text">{{ $jalan->telford }} Kilometer</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="detail-inner-title">Perkerasan Beton</div>
                                    <div class="detail-inner-text">{{ $jalan->rigid }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Tanah / Belum Tembus</div>
                                    <div class="detail-inner-text">{{ $jalan->tanah }} Kilometer</div>
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
                                    <div class="detail-inner-text">{{ $jalan->baik }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Baik (%)</div>
                                    <div class="detail-inner-text">{{ $kondisi->baik }} %</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="detail-inner-title">Sedang (Km)</div>
                                    <div class="detail-inner-text">{{ $jalan->sedang }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Sedang (%)</div>
                                    <div class="detail-inner-text">{{ $kondisi->sedang }} %</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="detail-inner-title">Rusak Ringan (Km)</div>
                                    <div class="detail-inner-text">{{ $jalan->rusak_ringan }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Rusak Ringan (%)</div>
                                    <div class="detail-inner-text">{{ $kondisi->rusak_ringan }} %</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="detail-inner-title">Rusak Berat (Km)</div>
                                    <div class="detail-inner-text">{{ $jalan->rusak_berat }} Kilometer</div>
                                </div>
                                <div class="col-6">
                                    <div class="detail-inner-title">Rusak Berat (%)</div>
                                    <div class="detail-inner-text">{{ $kondisi->rusak_berat }} %</div>
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
                                    <div class="detail-inner-text">{{ $jalan->informasi }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- -- End of sidebar right -- --}}
            @else
                <p class="ml-3">Pilih ruas jalan</p>
            @endif
            


    </div>
</div>

@endsection


@section('js')
<script src="http://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>

<script src="{{ asset('embedkml/layer/vector/KML.js') }}"></script>


<script>
    @if ($jalan) 
        var urlKml = "{{ asset('storage/peta/'.$jalan->gambar_peta) }}";
        var map = new L.Map('mapsbox', {center: new L.LatLng(58.4, 43.0), zoom: 50});
        var osm = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        var track = new L.KML(urlKml, {async: true});
        console.log(track);
        track.on("loaded", function(e) {
            map.fitBounds(e.target.getBounds());
        });
        map.addLayer(track);
        map.addLayer(osm);
        map.addControl(new L.Control.Layers({}, {'Track':track}));
    @endif

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