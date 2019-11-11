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
    <div class="homepage">
        <div class="bg-1"></div>
        <div class="bg-2"></div>

        <div class="homepage-wrapper">
            <div class="homepage-logo-box">
                <img class="homepage-logo" src="{{asset('assets/home/img/logo.png')}}">
            </div>

            <div class="homepage-text-box">
                <h1>
                    Sistem Informasi <br> 
                    Bidang Bina Marga <br> 
                    <small>Dinas Pekerjaan Umum  <br> 
                     Kabupaten Kutai Timur</small>
                </h1>
            </div>

            <div class="homepage-inner">
                <ul class="homepage-menu row justify-content-center">
                    <li class="col-5">
                        <a class="homepage-menu-item big" href="{{ route('sibima.sikombatan') }}">
                            <div class="homepage-menu-item-text">
                                <img class="homepage-menu-item-img" src="{{asset('assets/home/img/bridge.svg')}}">
                                SIKOMBATAN
                            </div>
                        </a>
                    </li>
                    <li class="col-5">
                        <a class="homepage-menu-item big" href="{{ route('sibima.sikalan') }}">
                            <div class="homepage-menu-item-text">
                                <img class="homepage-menu-item-img" src="{{asset('assets/home/img/road.svg')}}">
                                SIKALAN
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="homepage-menu row justify-content-center">
                    <li class="col-3">
                        <a class="homepage-menu-item" href="{{ route('sibima.profil') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/resume.svg')}}">
                            Profil
                            </div>
                        </a>
                    </li>
                    <li class="col-3">
                        <a class="homepage-menu-item" href="{{ route('sibima.artikel') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/text-lines.svg')}}">
                            Artikel
                            </div>
                        </a>
                    </li>
                    <li class="col-3">
                        <a class="homepage-menu-item" href="{{ route('sibima.galeri') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/gallery.svg')}}">
                            Galeri
                            </div>
                        </a>
                    </li>
                    <li class="col-3">
                        <a class="homepage-menu-item" href="{{ route('sibima.bilik_laporan') }}">
                            <div class="homepage-menu-item-text">
                            <img class="homepage-menu-item-img" src="{{asset('assets/home/img/report.svg')}}">
                            Lapor
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>
</body>

<script src="{{asset('assets/home/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>

</html>