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
        Schema::create('peserta_pemesanan', function (Blueprint $table) {
            $table->id('id_peserta');

            $table->unsignedBigInteger('id_pemesanan');

            $table->string('nama_peserta');

            $table->string('nik')->nullable();

            $table->integer('usia');

            $table->enum('kategori', [
                'dewasa',
                'anak'
            ]);

            $table->string('jenis_kelamin')->nullable();

            $table->timestamps();

            $table->foreign('id_pemesanan')
                ->references('id_pemesanan')
                ->on('pemesanan')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_pemesanan');
    }
};