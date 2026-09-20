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
    Schema::create('paket_wisata', function (Blueprint $table) {
        $table->id('id_paket');
        $table->string('nama_paket');
        $table->text('deskripsi');
        $table->string('akomodasi');
        $table->string('armada_transport');
        $table->decimal('harga_normal', 15, 2);
        $table->decimal('harga_promo', 15, 2);
        $table->string('status');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wisata');
    }
};
