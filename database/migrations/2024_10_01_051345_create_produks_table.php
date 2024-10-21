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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('kode_produk'); // Primary key
            $table->string('nama_produk'); // Product name
            $table->text('deskripsi')->nullable(); // Description, optional
            $table->integer('harga'); // Price
            $table->string('jumlah_produk'); // Product quantity
            $table->string('image')->nullable(); // Image path, optional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
}
};
