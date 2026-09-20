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
        Schema::create('dokumen_pemesanan', function (Blueprint $table) {
            $table->id('id_dokumen');

            $table->foreignId('id_pemesanan')
                ->constrained('pemesanan', 'id_pemesanan')
                ->cascadeOnDelete();

            $table->string('nama_dokumen');
            $table->string('file_dokumen');
            $table->string('status');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_pemesanan');
    }
};