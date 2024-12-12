<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLokasiTable extends Migration
{
    public function up()
    {
        Schema::create('tb_lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lokasi', 255);
            $table->text('deskripsi_lokasi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_lokasi');
    }
}
