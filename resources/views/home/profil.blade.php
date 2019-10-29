<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- title -->
    <title>SIBIMA | Profil</title>
    <!-- link -->
    <link rel="stylesheet" href="{{asset('assets/home/vendor/flowuplabel/jquery.FlowupLabels.css')}}">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/galery') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sibima/bilik-laporan') }}">Bilik Laporan</a>
                        </li>
                        <li class="nav-item active">
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
            <div class="profil">
                <h2 class="font-weight-normal text-center">Profil</h2>
                <div class="article-detail-img-box">
                    <img class="article-detail-img" src="https://sibima-kutim.com/assets/images/banner.jpg" alt="">
                </div>
                <div class="article-detail-text-box">
                    <div class="article-detail-text">
                        <h2>
                            A. Sejarah singkat instansi.
                        </h2>
                    </div>
                    <div class="article-detail-text paragraph">
                        Dinas pekerjaan umum terbentuk pada tanggal 4 oktober 1999 berdasarkan : Undang-undang ri no. 47 tahun 1999 sebagaimana telah diubah dengan undang-undang nomor 7 tahun 2000 tentang pembentukan kabupaten Nunukan, Kabupaten Kutai Barat, Kabupaten Kutai Timur, dan Kota Bontang ( Lembaran Negara Tahun 1999 Nomor 175, Tambahan Lembaran Negara Nomor 3896) Sebagaimana Telah Diubah Dengan Undang-Undang Nomor 7 Tahun 2000 Lembaran Negara Tahun 2000 Nomor 74, Tambahan Lembaran Negara Nomor 3962)
                    </div>
                    <div class="article-detail-text paragraph">
                        Peraturan Daerah Kabupaten Kutai Timur Nomor 06 Tahun 2001 tentang Pembentukan Organisasi dan Tata Kerja Dinas Pekerjaan Umum Kabupaten Kutai Timur.
                    </div>
                    <div class="article-detail-text paragraph">
                        Adapun Kepala Dinas Dinas Pekerjaan Umum adalah sbb :                        
                        <br>
                        <br>1. H. Nursyaifuddun, ST 1999 - 2003
                        <br>2. Ir. H. Ismunandar, MT 2003 - 2004
                        <br>3. H. Suyadi, ST 2004 -2009
                        <br>4. Ir. H. Rory Taufani, MT 2009 – 2012
                        <br>5. Aswandini Eka Tirta, ST., MT 2013 – sampai sekarang ini
                    </div>
                    <div class="article-detail-text">
                        <h2>
                            B. Visi & Misi
                        </h2>
                    </div>
                    <div class="article-detail-text paragraph">
                        Visi dan misi Dinas Pekerjaan Umum Kabupaten Kutai Timur mengacu pada Visi dan Misi Kabupaten Kutai Timur yang Tertuang dalam RPJMD 2016 – 2021 yaitu “Terwujudnya Infrastruktur ke PU-an yang Handal Untuk Mendukung Kutai Timur Sebagai Pusat Agribisnis dan Agroindustri”, visi ini selaras dengan visi Kabupaten Kutai Timur yang tertuang dalam RPJMD 2016 – 2021 yaitu Terwujudnya Kemandirian Kutai Timur Melalui Pembangunan Agribisnis dan Agroindustri.
                    </div>
                    <div class="article-detail-text paragraph">
                        Untuk mewujudkan visi tersebut, maka misi Dinas Pekerjaan Umum Kabupaten Kutai Timur dirumuskan sebagai berikut :

                        <br>1. Meningkatkan tata kelola sumber daya organisasi bidang pekerjaan umum yang meliputi sumber daya manusia, pengendalian dan pengawasan, kesekertariatan serta penelitian dan pengembangan untuk mendukung fungsi manajemen meliputi perencanaan yang terpadu, pengorganisasian yang efisien, pelaksanaan yang tepat dan pengawasan yang ketat.
                        <br>2. Meningkatkan ketersediaan sarana dan prasarana bidang ke-Pu-an.
                        <br>3. Meningkatkan pelaksanaan pendidikan dan pelatihan, bimtek, sosialisasi bina jasa konstruksi dalam rangka pelaksanaa Jasa Konstruksi.
                        <br>4. Meningkatkan pengelolaan sarana dan prasarana serta pengujian laboraturium konstruksi.
                    </div>
                    <div class="article-detail-text">
                        <h2>
                            C. Gambaran pelayanan dinas Pekerjaan Umum Kab. Kutai Timur.
                        </h2>
                    </div>
                    <div class="article-detail-text">
                        <h4>
                            1. Tugas pokok dan fungsi
                        </h4>
                    </div>
                    <div class="article-detail-text paragraph">
                        Dinas Pekerjaan Umum merupakan unsur pelaksana Pemerintah Daerah dipimpin oleh Kepala Dinas Daerah yang berkedudukan dibawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah. Tugas Pokok Dinas Pekerjaan Umum adalah Menyelenggarankan Urusan Pemerintah Bidang Pekerjaan Umum, Meliputi Bidang Sumber Daya Air, Cipta Karya, Bina Marga, Bina Jasa Kontruksi dan UPTD Lab serta tugas lain yang diberikan oleh Bupati sesuai dengan perundang-undangan yang berlaku.
                    </div>
                    <div class="article-detail-text paragraph">
                        Fungsi Dinas Perkerjaan Umum adalah sebagai berikut :

                        <br>a. Perumusan kebijakan teknis dan pelaksanaan pembinaan kegiatan bina marga, sumber daya air, cipta karya, jasa konstruksi dan Laboraturium Kontruksi, Jalan dan Alat Berat berdasarkan kebijakan umum yang ditetapkan oleh bupati sesuai dengan peraturan perundang-undangan yang berlaku.
                        <br>b. Pelaksanaan, fasilitasi, pembinaan dan evaluasi penyelenggaraan kegiatan bina marga.
                        <br>c. Pelaksanaan, fasilitasi, pembinaan dan evaluasi penyelenggaraan kegiatan sumber daya air.
                        <br>d. Pelaksanaan, fasilitasi, pembinaan dan evaluasi penyelenggaraan kegiatan cipta karya, yang mencakup bangunan gedung, air bersih, drainase dan sanitasi.
                        <br>e. Pelaksanaan, fasilitasi, pembinaan dan evaluasi penyelenggaraan pembinaan jasa konstruksi.
                        <br>f. Pelaksanaan dan evaluasi penyelenggaraan kegiatan unit pelaksana teknis dinas.
                        <br>g. Pengelolaan urusan kesekretariatan yang mencakup ketatalaksanaan perkantoran, perlengkapan, kepegawaian, program pembangunan, keuangan dan pelaporan.
                    </div>
                    <div class="article-detail-text">
                        <h4>
                            2. Struktur Organisasi
                        </h4>
                    </div>
                    <div class="article-detail-text paragraph">
                        Susunan Organisasi Pekerjaan Umum Kabupaten Kutai TimurBedasarkan Peraturan Daerah Kabupaten Kutai Timur No 10 Tahun 2016 Tantang Pembentukan dan Susunan Perangkat Daerah yang diturunkan dalam Peraturan Bupati Kutai Timur No 26 Tahun 2016 Tentang.
                    </div>
                    <div class="article-detail-text paragraph">
                        Susunan Organisasi dan Tata Kerja Dinas Daerah Kabupaten Kutai Timur adalah sebagai berikut :
                        <br>
                        <br>a. Kepala dinas
                        <br>b. Sekretariat, terdiri dari
                        <br><span class="ml-4">1. Sub Bagian Perencanaan Program</span>
                        <br><span class="ml-4">2. Sub Bagian Umum dan Kepegawaian</span>
                        <br><span class="ml-4">3. Sub Bagian Keuangan</span>
                        <br>c. Bidang Sumber Daya Air Terdiri dari
                        <br><span class="ml-4">1. Seksi Perencanaan Teknis</span>
                        <br><span class="ml-4">2. Seksi Tata Guna Sumber Daya Air</span>
                        <br><span class="ml-4">3. Seksi Operasional dan Pemeliharan</span>
                        <br>d. Bidang Bina Marga terdiri dari
                        <br><span class="ml-4">1. Seksi Perencanaan Teknis</span>
                        <br><span class="ml-4">2. Seksi Jalan</span>
                        <br><span class="ml-4">3. Seksi Jembatan</span>
                        <br>e. Bidang Cipta Karya terdiri dari
                        <br><span class="ml-4">1. Seksi Perencanaan Teknis</span>
                        <br><span class="ml-4">2. Seksi Tata Bangunan dan Lingkungan</span>
                        <br><span class="ml-4">3. Seksi Penyehatan Lingkungan dan Pemukiman</span>
                        <br>f. Bidang Bina Jasa Kontruksi terdiri dari
                        <br><span class="ml-4">1. Seksi Pengaturan</span>
                        <br><span class="ml-4">2. Seksi Pemberdayaan</span>
                        <br><span class="ml-4">3. Seksi Pengawasan</span>
                        <br>g. UPTD LAB
                        <br>h. UPTD Peralatan Kecamatan
                        <br>i. Kelompok Jabatan Fungsional
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