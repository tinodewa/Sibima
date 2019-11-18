<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSikalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sikalans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('no_ruas');
            $table->string('kelompok_data_dasar');
            $table->string('nama_ruas_jalan');
            $table->string('tahun_data', 4);
            $table->string('status');
            $table->string('fungsi');
            $table->string('mendukung')->nullable();
            $table->string('uraian_dukungan')->nullable();
            $table->string('kode_bidang_pekerjaan_umum', 5);
            $table->string('kode_data_dasar_jenis_infrastruktur', 5);
            $table->string('kode_infrastruktur', 5);
            $table->unsignedInteger('provinsi_id');
            $table->unsignedInteger('kota_id');
            $table->string('kecamatan');
            $table->string('kelurahan')->nullable();
            $table->string('titik_pengenal_ruas_awal');
            $table->string('titik_pengenal_ruas_akhir');
            $table->unsignedInteger('kode_patok')->nullable();
            $table->unsignedInteger('km_ruas_awal')->default(0);
            $table->double('km_ruas_akhir', 4, 2);
            $table->string('nama_lintas')->nullable();
            $table->string('gambar_peta');
            $table->unsignedInteger('baik')->default(0);
            $table->unsignedInteger('sedang')->default(0);
            $table->unsignedInteger('rusak_ringan')->default(0);
            $table->unsignedInteger('rusak_berat')->default(0);
            $table->unsignedInteger('mantap')->default(0);
            $table->unsignedInteger('tidak_mantap')->default(0);
            $table->unsignedInteger('panjang');
            $table->unsignedInteger('lebar');
            $table->unsignedInteger('lalulintas_harian')->default(0);
            $table->unsignedInteger('volume_capacity')->default(0);
            $table->unsignedInteger('tipe_jalan');
            $table->unsignedInteger('kapasitas_mst')->default(0);
            $table->unsignedInteger('tanah')->default(0);
            $table->unsignedInteger('telford')->default(0);
            $table->unsignedInteger('ashpalt')->default(0);
            $table->unsignedInteger('rigid')->default(0);
            $table->string('tahun_penanganan_terakhir')->nullable();
            $table->string('jenis_penanganan')->nullable();
            $table->double('koordinat_x_awal_ruas', 30, 10);
            $table->double('koordinat_y_awal_ruas', 30, 10);
            $table->double('koordinat_x_akhir_ruas', 30, 10);
            $table->double('koordinat_y_akhir_ruas', 30, 10);
            $table->text('informasi')->nullable();
            $table->boolean('status_approve')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sikalans');
    }
}
