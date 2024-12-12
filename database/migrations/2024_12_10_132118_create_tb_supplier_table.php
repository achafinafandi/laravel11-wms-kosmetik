<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSupplierTable extends Migration
{
    public function up()
    {
        Schema::create('tb_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('kontak', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_supplier');
    }
}
