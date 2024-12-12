<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKategoriTable extends Migration
{
    public function up()
    {
        Schema::create('tb_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_kategori');
    }
}
