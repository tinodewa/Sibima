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
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    <div class="col-md-12">
                                                        <label for="name" class="bilik-laporan-label">
                                                            Nama Lengkap
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="bilik-laporan-input" type="text" name="name" id="name" placeholder="isikan nama lengkap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    <div class="col-md-12">
                                                        <label for="email" class="bilik-laporan-label">
                                                            Email / No. Handphone
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="bilik-laporan-input" type="text" name="email" id="email" placeholder="isikan email / no. telp">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="content-description-poin-inner-legenda">
                                                    <div class="col-md-12">
                                                        <label for="laporan" class="bilik-laporan-label">
                                                            Laporan
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea class="bilik-laporan-input" name="laporan" id="laporan" cols="30" rows="2" placeholder="masukkan laporan anda"></textarea>
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
                <div class="bilik-laporan-form-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-description-title-box">
                                <div class="content-description-title yellow">
                                    <p>
                                        Foto
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-description-poin-box">
                                <div class="row">
                                    <div class="col-md-10">
                                        {{-- <div class="bilik-laporan-file-box">
                                            Pilih Gambar
                                            <input type="file" id="input-images" data-upload="" accept="image/*" class="bilik-laporan-input-file" name="image">
                                        </div> --}}
                                        <div class="bilik-laporan-file-box">
											<div class="wrapper-inner">
												<label for="input-images">
													<div class="wrapper-inner-text">
														<span class="la la-plus-circle"></span>
														<p>Pilih Gambar</p>
													</div>
												</label>
												<div class="wrapper-inner-image">
													<img class="image-preview" src="">
													<div class="remove-image">
														<div class="remove-image-inner">
															<span class="la la-times-circle"></span>
															<p>Hapus Gambar</p>
														</div>
													</div>
												</div>
											</div>
											<input type="file" id="input-images" data-upload="" accept="image/*" class="d-none input-file" name="image">
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bilik-laporan-form-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content-description-title-box">
                                <div class="content-description-title yellow">
                                    <p>
                                        Lokasi
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="content-description-poin-box">
                                <div class="row">
                                    <div class="col-md-10">
                                        {{-- <div class="bilik-laporan-file-box">
                                            Pilih Gambar
                                            <input type="file" id="input-images" data-upload="" accept="image/*" class="bilik-laporan-input-file" name="image">
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="bilik-laporan-map-box">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="content-description-poin-inner-legenda">
                                                    <div class="col-md-12">
                                                        <label for="laporan" class="bilik-laporan-label">
                                                            Ruas Jalan
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea class="bilik-laporan-input" name="laporan" id="laporan" cols="30" rows="2" placeholder="isikan nama ruas jalan yang bermasalah"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    <div class="col-md-12">
                                                        <label for="name" class="bilik-laporan-label">
                                                            Latitude
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="bilik-laporan-input" type="text" name="name" id="name" placeholder="isikan latitude">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="content-description-poin-inner-legenda">
                                                    <div class="col-md-12">
                                                        <label for="email" class="bilik-laporan-label">
                                                            Longitude
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="bilik-laporan-input" type="text" name="email" id="email" placeholder="isikan longitude">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="bilik-laporan-btn btn">
                                                    <p>Kirim Laporan</p>
                                                </button>
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