<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKeluarTable extends Migration
{
    public function up()
    {
        Schema::create('tb_keluar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')->constrained('tb_barang')->onDelete('cascade');
            $table->foreignId('id_lokasi_asal')->constrained('tb_rak')->onDelete('cascade');
            $table->integer('jumlah_keluar');
            $table->decimal('harga_jual_per_pcs', 15, 2)->nullable();
            $table->string('tujuan_barang_keluar', 255)->nullable();
            $table->text('deskripsi_keluar')->nullable();
            $table->timestamps();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_keluar');
    }
}
