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
                            <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
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
                        <a data-lightbox="image-1">
                            <img class="content-item-inner" src="https://sibima-kutim.com/assets/images/gallery/IMG_3294.JPG" alt="">
                            {{-- <div class="content-item-inner">
                                <div class="content-item-address">
                                    <p class="content-item-province">
                                        Sangatta Selatan
                                    </p>
                                    <p class="content-item-road">
                                        Jalan Poros ke Desa Sangkima Lama
                                    </p>
                                </div>
                            </div> --}}
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a>
                            <div class="content-item-inner">
                                <div class="content-item-address">
                                    <p class="content-item-province">
                                        Sangatta Selatan
                                    </p>
                                    <p class="content-item-road">
                                        Jalan Poros ke Desa Sangkima Lama
                                    </p>
                                </div>
                            </div>
                        </a> 
                    </div>
                    <div class="content-item col-md-4">
                        <a data-lightbox="image-1">
                            <div class="content-item-inner">
                                <div class="content-item-address">
                                    <p class="content-item-province">
                                        Sangatta Selatan
                                    </p>
                                    <p class="content-item-road">
                                        Jalan Poros ke Desa Sangkima Lama
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a>
                            <div class="content-item-inner">
                                <div class="content-item-address">
                                    <p class="content-item-province">
                                        Sangatta Selatan
                                    </p>
                                    <p class="content-item-road">
                                        Jalan Poros ke Desa Sangkima Lama
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a>
                            <div class="content-item-inner">
                                <div class="content-item-address">
                                    <p class="content-item-province">
                                        Sangatta Selatan
                                    </p>
                                    <p class="content-item-road">
                                        Jalan Poros ke Desa Sangkima Lama
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="content-item col-md-4">
                        <a>
                            <div class="content-item-inner">
                                <div class="content-item-address">
                                    <p class="content-item-province">
                                        Sangatta Selatan
                                    </p>
                                    <p class="content-item-road">
                                        Jalan Poros ke Desa Sangkima Lama
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
<script src="{{asset('assets/home/vendor/flowuplabel/jquery.FlowupLabels.min.js')}}"></script>
<script src="{{asset('assets/home/vendor/flowuplabel/main.js')}}"></script>
<script src="{{asset('assets/home/vendor/lightbox2-2.11.1/js/lightbox.min.js')}}"></script>
<script src="{{asset('assets/home/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
<script>
function myFunction() {
  // Declare variables
  var input, filter, parent, item, a, i, txtValue;
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  parent = document.getElementById("content-item");
  item = parent.getElementsByTagName('p');

  // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < item.length; i++) {
        a = item[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        item[i].style.display = "";
        } else {
        item[i].style.display = "none";
        }
    }
    }
</script>
</html>