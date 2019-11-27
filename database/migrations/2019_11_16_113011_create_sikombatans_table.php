<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSikombatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sikombatans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('sikalan_id');
            $table->string('nama_jembatan')->nullable();
            $table->unsignedInteger('no_jembatan');
            $table->string('jenis_konstruksi');
            $table->unsignedInteger('km_post')->default(0);
            $table->unsignedInteger('panjang');
            $table->unsignedInteger('lebar');
            $table->unsignedInteger('jumlah_bentang');
            $table->string('tipe_bangunan_atas');
            $table->string('kondisi_bangunan_atas');
            $table->string('tipe_bangunan_bawah');
            $table->string('kondisi_bangunan_bawah');
            $table->string('tipe_fondasi')->nullable();
            $table->string('kondisi_fondasi')->nullable();
            $table->string('tipe_lantai');
            $table->string('kondisi_lantai');
            $table->double('koordinat_x', 30, 10);
            $table->double('koordinat_y', 30, 10);
            $table->string('gambar_peta');
            $table->text('informasi')->nullable();
            $table->boolean('status_approve')->default(false);
            $table->timestamps();

            $table->foreign('sikalan_id')->references('id')->on('sikalans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sikombatans');
    }
}
