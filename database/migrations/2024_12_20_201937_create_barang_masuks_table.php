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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('no_barang')->nullable()->change();
            $table->string('kode_barang');
            $table->integer('quantity');
            $table->string('origin');
            $table->date('tanggal_masuk');
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('stok_barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuks');
    }
};