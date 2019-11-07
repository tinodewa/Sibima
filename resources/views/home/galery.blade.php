<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- title -->
    <title>SIBIMA | Galeri</title>
    <!-- link -->
    <link rel="stylesheet" href="{{asset('assets/home/vendor/lightbox2-2.11.1/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/vendor/bootstrap-4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/home/css/custom.css')}}">
</head>

<body>

    {{-- header --}}
    <header class="header decoration">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="header-title">
            <div class="container">
                <div class="header-title-box">
                    <h2>Sistem Informasi Bidang Bina Marga</h2>
                    <h4>Dinas Pekerjaan Umum</h4>
                    <h4>Kabupaten Kutai Timur</h4>
                </div>
            </div>
        </div>
    </header>

    {{-- navbar --}}
    <div class="nav-box">
        <nav class="navbar navbar-expand-lg navbar-light nav-custom">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima') }}">Beranda<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/sikombatan') }}">Sikombatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/sikalan') }}">Sikalan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/artikel') }}">Artikel</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/sibima/galery') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/bilik-laporan') }}">Bilik Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/profil') }}">Profil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- content --}}
    <div class="content galery">
        <div class="container">
            <h2 class="font-weight-normal text-center">Galery</h2>
            <div class="content-inner">
                <div class="row">
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="https://sibima-kutim.com/assets/images/gallery/IMG_3294.JPG" data-lightbox="example-1">
                            <div class="content-item-inner">
                                <img class="example-image" src="https://sibima-kutim.com/assets/images/gallery/IMG_3294.JPG" alt="Girl looking out people on beach">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        Alhamdulillah... SIKOMBATAN Juara 3
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="https://sibima-kutim.com/assets/images/gallery/bupati_dukung_sikombatan.jpg" data-lightbox="example-1">
                            <div class="content-item-inner">
                                <img class="example-image" src="https://sibima-kutim.com/assets/images/gallery/bupati_dukung_sikombatan.jpg" alt="Girl looking out people on beach">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        Bupati Kutim Dukung Proyek SIKOMBATAN
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="https://sibima-kutim.com/assets/images/gallery/proses_proper.jpg" data-lightbox="example-1">
                            <div class="content-item-inner">
                                <img class="example-image" src="https://sibima-kutim.com/assets/images/gallery/proses_proper.jpg" alt="Girl looking out people on beach">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        Proses ProPer SIKOMBATAN
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="https://sibima-kutim.com/assets/images/gallery/tinjau_jln_sgt_bgln.jpg" data-lightbox="example-1">
                            <div class="content-item-inner">
                                <img class="example-image" src="https://sibima-kutim.com/assets/images/gallery/tinjau_jln_sgt_bgln.jpg" alt="Girl looking out people on beach">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        Tinjau Lokasi Jalan Amblas, Bupati: Perbaikan Lanjutan Ditangani Dinas PU
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="https://sibima-kutim.com/assets/images/gallery/lab_PU.jpg" data-lightbox="example-1">
                            <div class="content-item-inner">
                                <img class="example-image" src="https://sibima-kutim.com/assets/images/gallery/lab_PU.jpg" alt="Girl looking out people on beach">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        Sejak 2015, Labotarium PU Terakreditasi KAN
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a class="example-image-link" href="https://sibima-kutim.com/assets/images/gallery/peresmjian_jbt_rimba_hijau.jpg" data-lightbox="example-1">
                            <div class="content-item-inner">
                                <img class="example-image" src="https://sibima-kutim.com/assets/images/gallery/peresmjian_jbt_rimba_hijau.jpg" alt="Girl looking out people on beach">
                                <div class="content-item-address galery-text-box">
                                    <p class="content-item-road galery-text">
                                        30 Nopember 2015, Bupati Ardiansyah Resmikan Jembatan Rimba Hijau, Manubar Tidak Terisiolasi Lagi
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <p>
					© SIBIMA (Sistem Informasi Bidang Bina Marga) - 2019
				</p>
            </div>
        </div>
    </footer>
</body>

<script src="{{asset('assets/home/vendor/flowuplabel/jquery.min.js')}}"></script>
<script src="{{asset('assets/home/vendor/flowuplabel/main.js')}}"></script>
<script src="{{asset('assets/home/vendor/lightbox2-2.11.1/js/lightbox.min.js')}}"></script>
<script src="{{asset('assets/home/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
</html>