<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<!DOCTYPE html>

<html lang="en">

<head>
    <!--    Meta    -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <title>Super Admin | Data Kondisi Jembatan</title>
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <!--     link    -->
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/superadmin/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/superadmin/css/light-bootstrap-dashboard.css?v=2.0.0')}}"/>
    <link rel="stylesheet" href="{{asset('assets/superadmin/datatables/css/jquery.dataTables.min.css')}}">    
    <link rel="stylesheet" href="{{asset('assets/superadmin/css/custom.css')}}">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar -->
        <div class="sidebar" data-image="{{asset('assets/superadmin/img/sidebar.jpg')}}">
            <div class="sidebar-wrapper" style="overflow: hidden;">
                <div class="logo">
                    <a href="{{ url('/super-admin/dashboard') }}" class="simple-text">
                        Sibima
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/dashboard') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/data-provinsi') }}">
                            <i class="nc-icon nc-square-pin"></i>
                            <p>Data Provinsi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/data-kabupaten-kota') }}">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Kabupaten/Kota</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/data-kondisi-jalan') }}">
                            <i class="nc-icon nc-simple-delete"></i>
                            <p>Sikalan</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/super-admin/data-kondisi-jembatan') }}">
                            <i class="nc-icon nc-vector"></i>
                            <p>Sikombatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/artikel') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Artikel</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/galeri') }}">
                            <i class="nc-icon nc-album-2"></i>
                            <p>Galeri</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/profil') }}">
                            <i class="nc-icon nc-badge"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/super-admin/user') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-sticky" color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="paket.php">Tambah Data Kondisi Jembatan (Sikombatan) </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card striped-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Kondisi Jembatan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="paket">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Nomor Ruas</label>
                                                        <select class="form-control" id="tipe">
                                                            <option disabled selected hidden>Choose</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Foto Jembatan</label>
                                                        <input type="file" class="form-control" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Gambar Peta</label>
                                                        <input type="file" class="form-control" multiple>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Kelompok Data Dasar</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Nama Jembatan</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Tahun Data</label>
                                                        <input type="number" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card striped-tabled-with-hover">
                                                <div class="card-header bg-yellow">
                                                    <h4 class="card-title">Kodefikasi Kelompok Data</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="paket">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kode Bidang Pekerjaan Umum</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                <div class="form-group">
                                                                        <label>Kode Data Dasar Jenis Infrastruktur</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kode Infrastruktur</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card striped-tabled-with-hover">
                                                <div class="card-header bg-yellow ">
                                                    <h4 class="card-title">Lokasi</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="paket">
                                                    <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Provinsi</label>
                                                                        <select class="form-control" id="fungsi">
                                                                            <option disabled selected hidden>Choose</option>
                                                                            <option value="1">Kalimantan Timur</option>
                                                                            <option value="2">Kalimantan Barat</option>
                                                                            <option value="3">Kalimantan Utara</option>
                                                                            <option value="4">Kalimantan Selatan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kabupaten / Kota</label>
                                                                        <select class="form-control" id="fungsi">
                                                                            <option disabled selected hidden>Choose</option>
                                                                            <option value="1">Malang</option>
                                                                            <option value="2">Surabaya</option>
                                                                            <option value="3">Yogyakarta</option>
                                                                            <option value="4">Jakarta</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kecamatan</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kelurahan / Desa</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Titik Pengenal Jembatan</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kode Patok</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Nama Lintas</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card striped-tabled-with-hover">
                                                <div class="card-header bg-yellow ">
                                                    <h4 class="card-title">Kondisi (Dalam Km)</h4>
                                                </div>
                                                <div class="card-body">
                                                <div class="paket">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Bangunan Atas</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Kepala Jembatan</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Pilar</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Lantai</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Pondasi</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card striped-tabled-with-hover">
                                                <div class="card-header bg-yellow ">
                                                    <h4 class="card-title">Data Teknis</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="paket">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Panjang (Km)(Sesuai SK)</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Lebar Perkerasan Jalan (m)</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Tipe Jalan</label>
                                                                        <select class="form-control" id="tipe">
                                                                            <option disabled selected hidden>Choose</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Tipe Lintasan</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Tipe Bagian Jembatan :</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pl-5">
                                                                    <div class="form-group">
                                                                        <label>Bangunan Atas</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pl-5">
                                                                    <div class="form-group">
                                                                        <label>Kepala Jembatan</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pl-5">
                                                                    <div class="form-group">
                                                                        <label>Pilar</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pl-5">
                                                                    <div class="form-group">
                                                                        <label>Lantai</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pl-5">
                                                                    <div class="form-group">
                                                                        <label>Pondasi</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>tahun Penanganan Terakhir</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <div class="form-check">
                                                                            <label>Jenis Penanganan</label>
                                                                        </div>
                                                                        <div class="form-check form-check-radio">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios1" value="option1">
                                                                                <span class="form-check-sign"></span>
                                                                                Peningkatan
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check form-check-radio">
                                                                            <label class="form-check-label">
                                                                                <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadios2" value="option2">
                                                                                <span class="form-check-sign"></span>
                                                                                Pemeliharaan Berkala
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card striped-tabled-with-hover">
                                                <div class="card-header bg-yellow ">
                                                    <h4 class="card-title">Koordinat (Decimal Degree)</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="paket">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Koordinat X</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4 pr-1">
                                                                    <div class="form-group">
                                                                        <label>Koordinat Y</label>
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-fill ml-3 btn-tambah">Simpan</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mini Detail -->
                <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog custom-modal">
                        <div class="modal-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card strpied-tabled-with-hover">
                                        <div class="card-header ">
                                            <h4 class="card-title">Paket Bromo</h4>
                                        </div>
                                        <div class="card-body table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <th>Paket</th>
                                                    <th>Tipe</th>
                                                    <th>Foto</th>
                                                    <th>Harga</th>
                                                    <th class="w-250">Overview</th>
                                                    <th>Jumlah Grup</th>
                                                    <th>Lokasi</th>
                                                    <th>Jam</th>
                                                    <th>Hari</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bromo</td>
                                                        <td>Family Trip</td>
                                                        <td>
                                                            <div class="img-box">
                                                                <img src="assets/img/bromo1.jpg" alt="bromo" class="img-fluid">
                                                            </div>
                                                        </td>
                                                        <td>Dewasa : <br> Rp 550.000 <br> Anak : <br> Rp 350.000</td>
                                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio reprehenderit earum quam aliquid soluta facilis beatae enim similique impedit. Soluta, iusto deleniti nostrum porro debitis temporibus molestiae voluptatem dolores.</td>
                                                        <td>5 orang</td>
                                                        <td>Bromo Tengger <br> Semeru National Park</td>
                                                        <td>2</td>
                                                        <td>3 Hari <br> 2 Malam</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  End Detail -->

                <!-- Mini Confirmation -->
                <div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header justify-content-center">
                            </div>
                            <div class="modal-body text-center">
                                <p>Yakin hapus paket ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link btn-simple">Hapus</button>
                                <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  End Confirmation -->
            </div>
            <!-- End Content -->

            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/superadmin/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/superadmin/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/superadmin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('assets/superadmin/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('assets/superadmin/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/superadmin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{asset('assets/superadmin/js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/superadmin/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
<!-- Plugin -->
<script src="{{asset('assets/superadmin/datatables/js/jquery.dataTables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('table').DataTable({
            "autoWidth": false,
            "info": false
        });
    });
</script>

</html>