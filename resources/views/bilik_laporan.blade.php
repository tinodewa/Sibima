<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- title -->
    <title>SIBIMA | Bilik Laporan</title>
    <!-- link -->
    <link rel="stylesheet" href="{{asset('assets/vendor/flowuplabel/jquery.FlowupLabels.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-4.3.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
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
        <nav class="navbar navbar-expand-lg nav-custom">
            <div class="container">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/galery') }}">Galeri</a>
                        </li>
                        <li class="nav-item active">
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
    <div class="content">
        <div class="container">
            <div class="bilik-laporan">
                <h2 class="font-weight-normal text-center">Bilik Laporan</h2>
                <div class="bilik-laporan-form-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-description-title-box">
                                <div class="content-description-title yellow">
                                    <p>
                                        Data Pelapor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-description-poin-box">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    Ruas Jalan
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    Pin Jalan
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    Titik Rusak Ringan
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    Titik Rusak Berat
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<script src="{{asset('assets/vendor/flowuplabel/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/flowuplabel/jquery.FlowupLabels.min.js')}}"></script>
<script src="{{asset('assets/vendor/flowuplabel/main.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
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