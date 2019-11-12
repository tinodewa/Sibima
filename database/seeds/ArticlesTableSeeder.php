<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Article::create([
            'user_id' => 1,
            'title' => 'Ismunandar Inventarisir Usulan Program Mendesak di Kutai Timur',
            'category' => 'umum',
            'content' => '<p><strong>KUTAI TIMUR, (Suaraindonesia.co.id)</strong>&nbsp;- Lokasi kedua rombongan Rakordan Halal bihalal bergeser ke Kecamatan Muara Bengkal. Dipimpin Bupati Kutai Timur (Kutim) Ismunandar rombongan bertemu masyarakat Kecamatan muara Bengkal di Balai Pertemuan Umum (BPU) di Desa Muara Bengkal Ulu, Minggu (1/7/2018).</p>
                        <p>Rombongan disambut langsung oleh Camat Muara Bengkal, Darmansyah bersama jajaran pemerintahan &nbsp;tuju desa yang ada. Ismunandar yang mengenakan pakaian dinas ASN pada kesempatan itu menuturkan, selain bersilaturahmi pasca lebaran, dirinya memohon maaf jika selama memimpin Kutim ada salah kata, terutama dalam momen pertemuan kegiatan.</p>
                        <p>&ldquo;Masih dalam suasana syawal, saya bersama jajaran Pemkab Kutim menghaturkan maaf untuk seluruh masyarakat Muara Bengkal. Kita tingkatkan fungsi koordinasi Pemkab dan pemerintahan kecamatan hingga desa,&rdquo; jelasnya.</p>
                        <p>Tidak hanya silaturahmi, kegiatan ini ditujukan untuk mendapatkan informasi terbaru terkait program pokok utama kabinet Ismu-KB dalam memenuhi infrastruktur jalan seperti listrik, air bersih, jalan, pertanian, dan pendidikan.</p>
                        <p>Terkait listrik dua desa yakni Desa Mulupan dan Desa Senambah hingga kini belum merasakan fasilitas setrum. Oleh karena itu, mendengar keluhan dari kades dua desa setempat, Ismu akan menyelesaikan permasalahan tersebut pasalnya kebutuhan listrik sangat vital.</p>
                        <p>&ldquo;Setelah mendengar keluhan tersebut tentang usulan listrik PLN segera saya inventarisir. Masalahnya hingga kini yang menjadi hambatan yaitu jaringan. Nanti kami yang akan menyediakan jaringan dan dibahas anggarannya. Ini menjadi beban pemerintah, kami akan berusaha secepatnya listrik masuk,&rdquo; tegasnya.</p>
                        <p>Ditambahkan Ismu, Pemkab Kutim akan menjajaki koordinasi dengan bantuan PT Telen Prima Sawit (TPS) yang berada di Muara Bengkal bisa membantu dua desa ini dengan tambahan daya listrik sisa dari operasional perusahaan sawit tersebut menggunakan Excess Power.</p>
                        <p>&ldquo;Kita berdoa saja, perhatian Gubernur baru menjadi porsi besar untuk pembangunan infrastruktur Kutim. Namun saya tekankan tetap himbauan mendirikan Rumah Sakit ini jangan asal pasalnya tidak semua pratama berhasil, ada sekitar 10 Rumah Sakit Pratama akhirnya fungsinya hanya mirip puskesmas. Jadi penanganan harus serius,&rdquo; terang Ismu.</p>
                        <p>Dalam diskusi Rakor tersebut, para Kades mengutarakan usulannya kepada Pemkab mulai dari jaringan listrik, penyediaan air bersih, hingga penerangan PLN dan infrastruktur jalan. &nbsp;Selain itu, para kades juga mengusulkan adanya pembangunan RS Pratama, pasalnya, kerap kali jika ada pasien dirujuk ke Samarinda saat di pertengahan jalan nyawanya tidak tertolong karena jarak tempuh yang jauh.</p>
                        <p>&ldquo;Jika hujan lokasi jalan terendam air cukup parah karena terjadi banjir,&rdquo; terangnya Kades Mulupan Fathul.</p>
                        <p>&ldquo;Rumah Sakit Pratama ini dirasa sangat penting dinantikan kehadirannya masuk di Muara Bengkal,&rdquo; terang Kades Batu Balai Arif Busman.</p>
                        <p>Pertanyaan ini pun langsung dijawab Kadis Kesehatan dr Bahrani menurutnya terkait permintaan masyarakat untuk Rumah Sakit Pratama ini anggarannya ada di APBD Provinsi bukan menggunakan APBD Kutim.</p>
                        <p>&ldquo;Lagi diusulkan ke Provinsi, terkait anggaran pembangunan. Kita tahun ini lebih fokus menjadi skala prioritas yaitu pembangunan Puskesmas baru atau bangunan Puskesmas yang lama diperbaiki saja,&rdquo; katanya. (hms13/Advetorial)</p>
                        <p>&nbsp;</p>
                        <p><strong>Reporter</strong>&nbsp;: Muhammad&nbsp;</p>
                        <p><strong>Editor</strong>&nbsp;: Farhan Jordan</p>',
            'reporter' => 'Muhammad',
            'editor' => 'Farhan Jordan',
            'thumbnail' => '1573525355.inventris_jln_rusak.jpg'
        ]);
    }
}
