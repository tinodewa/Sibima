<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSikombatanImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sikombatan_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sikombatan_id');
            $table->string('filename');
            $table->timestamps();

            $table->foreign('sikombatan_id')->references('id')->on('sikombatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sikombatan_images');
    }
}
