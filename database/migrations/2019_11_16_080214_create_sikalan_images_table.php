<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSikalanImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sikalan_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sikalan_id');
            $table->string('filename')->unique();
            $table->timestamps();

            $table->foreign('sikalan_id')->references('id')->on('sikalans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sikalan_images');
    }
}
