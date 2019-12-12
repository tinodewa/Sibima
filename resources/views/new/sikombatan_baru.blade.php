@extends('new/master')
@section('title','Sikombatan Baru')

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
        <div class="form-group mt-5">
            <p class="form-text">Pilih <span class="form-title">Kecamatan</span></p>
            <select  id="selectKecamatan"  data-placeholder="Pilih Kecamatan..." class="chosen-select form-control chosen" tabindex="2">
            <option value=""></option>
                @foreach ($kecamatan as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @endforeach
            </select>
            </select>
        </div> 
        <form action="{{ route('sibima.sikombatan')}}" method="GET">
            <div class="form-group mt-5">
                <p class="form-text">Pilih <span class="form-title">Jembatan</span></p>
                <select name="id" id="selectJembatan" data-placeholder="Pilih Jembatan..." class="form-control selectipt" tabindex="2">
                    <option value="" selected default disabled>Pilih Jembatan...</option>
                </select>
            </div>
            <div class="form-group mt-5 submit-group">
                <button class="btn btn-primary button-submit" id="submitBtn">Submit</button>
            </div>
        </form>
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
          <div class="lokasi-head col-11 mx-auto">
            <i class="icon ion-md-pin lokasi-head__icon"></i>
            @if ($jembatan)
                <p class="lokasi-title text-center">{{$jembatan->nama_jembatan}}</p>    
            @else
                <p class="lokasi-title text-center">Pilih Jembatan</p>    
            @endif
          </div>
          <div class="lokasi-body">
                @if ($jembatan)
                <p class="lokasi-paragraf">{{$jembatan->jenis_konstruksi}}</p>      
                @else
                    <p class="lokasi-paragraf">- | -</p>   
                @endif
            
                <hr>
                <div class="latitude-box">
                    <i class="icon ion-md-locate latitude-box__icon"></i>
                    @if ($jembatan)
                        <p class="">{{$jembatan->koordinat_x}} , {{$jembatan->koordinat_y}}</p>       
                    @else
                        <p class="">- , -</p>  
                    @endif
                    
                </div>
          </div>
          
      </div>
     
      
      <div class="lokasi-footer row mt-3">
        
        @if ($jembatan)
        <div class="col-6">
            @foreach ($provinsis as $provinsi)
                @if ($provinsi->id == $jembatan->sikalan->provinsi_id)
                    <div class="span-card"> Provinsi <br><span class="bold">{{$provinsi->nama}}</span></div    >
                @endif
            @endforeach
            </div>
            <div class="col-6">
                @foreach ($kotas as $kota)
                    @if ($kota->id == $jembatan->sikalan->kota_id)
                        <div class="span-card"> Kabupaten/Kota <br> <span class="bold">{{$kota->nama}}</span></div>
                    @endif
                @endforeach
            </div>
            <div class="col-12">
                <div class="span-card"> Kecamatan <br> <span class="bold">{{ $jembatan->sikalan->kecamatan }}</span></div>
            </div>
        </div>

            {{-- -- Slider Image -- --}}
            <div class="row my-4">
                <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                            @php $i=0; @endphp
                            @foreach ($sikombatanImages as $key => $sikombatanImage)
                                @if ($key == 0)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i++ }}"></li>
                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i++ }}"></li>
                                @endif
                            @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @php
                            $it = true;
                        @endphp
                        @foreach ($sikombatanImages as $key => $sikombatanImage)
                            @if ($sikombatanImage->sikombatan_id == $jembatan->id)
                                @if ($it)
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/jembatan/'.$sikombatanImage->filename) }}" class="d-block w-100" alt="...">
                                    </div>
                                    @php
                                        $it = false;
                                    @endphp
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ asset('storage/jembatan/'.$sikombatanImage->filename) }}" class="d-block w-100" alt="...">
                                    </div>
                                @endif
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

            
            
            {{-- ///////////////////////////////////////////////////////////////////// --}}
            {{-- ///Data Umum Dan Lain Lain --}}

            <div class="row mb-5">
                <div class="col-11 mx-auto">
                    <div class="detail-box">
                        <div class="detail-title mb-4">Data Umum</div>
                        <div class="row">
                            <div class="col-6">
                                <div class="detail-inner-title">Nomor Jembatan</div>
                                <div class="detail-inner-text">{{ $jembatan->no_jembatan }}</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Nama Jembatan</div>
                                <div class="detail-inner-text">{{ $jembatan->nama_jembatan }}</div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="detail-inner-title">Nama Jalan</div>
                                <div class="detail-inner-text">{{ $jembatan->sikalan->nama_ruas_jalan }}</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Kecamatan</div>
                                <div class="detail-inner-text">{{ $jembatan->sikalan->kecamatan }}</div>
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
                                <div class="detail-inner-text">{{ $jembatan->panjang }} Meter</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Lebar (m)</div>
                                <div class="detail-inner-text">{{ $jembatan->lebar }} Meter</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="detail-inner-title">Jumlah Bentang</div>
                                <div class="detail-inner-text">{{ $jembatan->jumlah_bentang }}</div>
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
                                <div class="detail-inner-text">{{ $jembatan->tipe_bangunan_atas }}</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Kondisi Bangunan Atas</div>
                                <div class="detail-inner-text">{{ $jembatan->kondisi_bangunan_atas }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="detail-inner-title">Tipe Bangunan Bawah</div>
                                <div class="detail-inner-text">{{ $jembatan->tipe_bangunan_bawah }}</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Kondisi Bangunan Bawah</div>
                                <div class="detail-inner-text">{{ $jembatan->kondisi_bangunan_bawah }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="detail-inner-title">Tipe Fondasi</div>
                                <div class="detail-inner-text">{{ $jembatan->tipe_fondasi }}</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Kondisi Fondasi</div>
                                <div class="detail-inner-text">{{ $jembatan->kondisi_fondasi }}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="detail-inner-title">Tipe Lantai</div>
                                <div class="detail-inner-text">{{ $jembatan->tipe_lantai }}</div>
                            </div>
                            <div class="col-6">
                                <div class="detail-inner-title">Kondisi Lantai</div>
                                <div class="detail-inner-text">{{ $jembatan->kondisi_lantai }}</div>
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
                                <div class="detail-inner-text">{{ $jembatan->informasi }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- -- End of sidebar right -- --}}
        @else 
            <p class="ml-3">Pilih Jembatan</p>
        @endif
</div>
</div>

@endsection


@section('js')
<script src="{{ asset('js/leaflet.js') }}"></script>
<!-- -- -- Gesture handling untuk mobile -- -- -->
<script src="{{ asset('assets/new/js/leaflet-gesture-handling.min.js') }}"></script>

<script src="{{ asset('embedkml/layer/vector/KML.js') }}"></script>
<script src="{{ asset('assets/new/js/jquery.mobile-1.4.5.min.js') }}"></script>


<script>
$(document).ready(function(){
    @if ($jembatan) 
        var urlKml = "{{ asset('storage/peta_jembatan/'.$jembatan->gambar_peta) }}";
        var mapBox = document.getElementById('mapsbox');
        /////////////////////////////////
        //Gesture handling untuk mobile
        var map = new L.Map(mapBox, {center: new L.LatLng(58.4, 43.0), zoom: 50, gestureHandling: true});
        var osm = new L.TileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
        var track = new L.KML(urlKml, {async: true});
        track.on("loaded", function(e) {
            map.fitBounds(e.target.getBounds());
        });
        map.addLayer(track);
        map.addLayer(osm);
        map.addControl(new L.Control.Layers({}, {'Track':track}));
    @endif
    $('#selectKecamatan').on('change', function() {
        var id = this.value;
        if(id){
            $.ajax({
            type:"get",
            url:"{{url('/getJembatan')}}/"+id,
            success:function(res)
            {       
                if(res)
                {   
                    $("#selectJembatan").empty();
                    $("#selectJembatan").append('<option value="0" default selected disabled>Pilih Jembatan...</option>');
                    $.each(res,function(key,value){
                        if(value.sikalan.kecamatan == id){
                            $("#selectJembatan").append('<option value="'+value.id+'">'+value.no_jembatan+' - '+value.nama_jembatan+'</option>');
                        }
                    });

                    // $("#selectJembatan_chosen .chosen-results").empty();
                    // $.each(res,function(key,value){
                    //     $("#selectJembatan_chosen .chosen-results").append('<option value="'+value.id+'" class="active-result" data-option-array-index="'+value.id+'">'+value.nama_ruas_jalan+'</option>');
                    // });
                }
            }

            });
        }
    });


    //////////////////////////////////////////////////////////////////////////
    ////
    //jquery mobile touch swipe carousel
    ///

    $("#carouselExampleIndicators").swiperight(function() {
        $(this).carousel('prev');
    });
    $("#carouselExampleIndicators").swipeleft(function() {
        $(this).carousel('next');
    });



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