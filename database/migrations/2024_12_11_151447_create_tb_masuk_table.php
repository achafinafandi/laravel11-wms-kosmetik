<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_masuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')->constrained('tb_barang')->onDelete('cascade');
            $table->foreignId('id_lokasi')->constrained('tb_rak')->onDelete('cascade');
            $table->integer('jumlah_masuk');
            $table->decimal('harga_beli_per_pcs', 15, 2)->nullable();
            $table->string('asal_barang', 255)->nullable();
            $table->text('deskripsi_masuk')->nullable();
            $table->timestamps();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_masuk');
    }
};
