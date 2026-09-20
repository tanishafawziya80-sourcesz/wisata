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
        Schema::create('jadwal_tour', function (Blueprint $table) {
            $table->id('id_jadwal');

            $table->foreignId('id_paket')
                ->constrained('paket_wisata', 'id_paket')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('id_tour_leader');

            $table->date('tgl_keberangkatan');
            $table->date('tgl_kepulangan');
            $table->integer('kuota');
            $table->integer('sisa_kuota');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_tour');
    }
};