<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('barangs', function (Blueprint $table) {
        $table->id();
        $table->string('kode_suplier');
        $table->string('nama_suplier');
        $table->string('kode_barang');
        $table->string('nama_barang');
        $table->integer('jumlah_barang');
        $table->decimal('harga_dasar', 10, 2);
        $table->decimal('harga_jual', 10, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nametable');
    }
};

