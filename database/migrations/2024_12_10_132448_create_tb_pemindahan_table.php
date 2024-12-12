<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPemindahanTable extends Migration
{
    public function up()
    {
        Schema::create('tb_pemindahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')->constrained('tb_barang')->onDelete('cascade');
            $table->foreignId('id_lokasi_asal')->constrained('tb_rak')->onDelete('cascade');
            $table->foreignId('id_lokasi_tujuan')->constrained('tb_rak')->onDelete('cascade');
            $table->integer('jumlah_barang');
            $table->text('alasan_pemindahan')->nullable();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_pemindahan');
    }
}
