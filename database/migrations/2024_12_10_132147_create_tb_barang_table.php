<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBarangTable extends Migration
{
    public function up()
    {
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->constrained('tb_kategori')->onDelete('cascade');
            $table->foreignId('id_supplier')->nullable()->constrained('tb_supplier')->onDelete('set null');
            $table->string('nama_barang', 255);
            $table->decimal('harga_beli', 15, 2);
            $table->decimal('harga_jual', 15, 2);
            $table->integer('stok_minimum')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_barang');
    }
}
