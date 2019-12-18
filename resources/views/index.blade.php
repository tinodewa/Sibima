<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- title -->
    <title>SIBIMA | Home</title>

    <!-- link -->
    <link rel="stylesheet" href="{{asset('assets/home/vendor/bootstrap-4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/custom.css')}}">
</head>

<body>
    <div class="homepage row">
        <div class="col-md-7 col-sm-12">
        <div class="homepage-wrapper">
            <div class="homepage-logo-box">
                <img class="homepage-logo" src="{{asset('assets/home/img/logo.png')}}">
            </div>

            <div class="homepage-text-box mt-md-3">
                <h1>
                    Sistem Informasi <br class="break-sm"> 
                    Jalan Dan <br class="break-l"> Jembatan <br> 
                    <small>Dinas Pekerjaan Umum  <br class="break-sm"> 
                     Kabupaten Kutai <br class="break-l"> Timur</small>
                </h1>
            </div>

            <div class="homepage-inner row">
                <ul class="homepage-menu col-md-6 row justify-content-center">
                    <li class="col-5 col-md-4">
                        <a class="homepage-menu-item big" href="{{ route('sibima.sikombatan') }}">
                            <div class="homepage-menu-item-text">
                                <img class="homepage-menu-item-img" src="{{asset('assets/home/img/bridge.svg')}}">
                                Jembatan
                            </div>
                        </a>
                    </li>
                    <li class="col-5 col-md-4">
                        <a class="homepage-menu-item big" href="{{ route('sibima.sikalan') }}">
                            <div class="homepage-menu-item-text">
                                <img class="homepage-menu-item-img" src="{{asset('assets/home/img/road.svg')}}">
                                Jalan
                            </div>
                        </a>
                    </li>
                    <hr class="garis-batas d-md-none"/>
                </ul>
                <ul class="homepage-menu col-md-6 row justify-content-center mt-sm-3 mt-md-0">
                    <li class="col-4 col-md-4">
                        <a class="homepage-menu-item" href="{{ route('sibima.profil') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/resume.svg')}}">
                            Profil
                            </div>
                        </a>
                    </li>
                    <li class="col-4 col-md-4">
                        <a class="homepage-menu-item" href="{{ route('sibima.artikel') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/text-lines.svg')}}">
                            Artikel
                            </div>
                        </a>
                    </li>
                    <li class="col-4 col-md-4">
                        <a class="homepage-menu-item" href="{{ route('sibima.galeri') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/gallery.svg')}}">
                            Galeri
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>  
        </div>






        <!-- SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER -->
        <div class="col-md-5 slidebox">
            <div class="row my-5">
                <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide slide-item ml-3 mr-auto" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner" data-interval="3500">
                                <div class="carousel-item active">
                                <img src="{{ asset('storage/galeri/1574146002.gallery sikombatan 1.jpg') }}" class="d-block w-100 t500" alt="slide img">
                                </div>
                                <div class="carousel-item" data-interval="3500">
                                <img src="{{ asset('storage/galeri/1574146241.gallery sikombatan 2.jpg') }}" class="d-block w-100 t500" alt="slide img">
                                </div>
                                <div class="carousel-item" data-interval="3500">
                                <img src="{{ asset('storage/galeri/1574146301.gallery sikombatan 3.jpg') }}" class="d-block w-100 t500" alt="slide img">
                                </div>
                                <div class="carousel-item" data-interval="3500">
                                <img src="{{ asset('storage/galeri/1574146316.gallery sikombatan 4.jpg') }}" class="d-block w-100 t500" alt="slide img">
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
        </div>


    </div>

</body>

<script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('assets/new/js/jquery.mobile-1.4.5.min.js') }}"></script>
<script src="{{asset('assets/home/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
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


</html>