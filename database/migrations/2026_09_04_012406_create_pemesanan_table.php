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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id('id_pemesanan');

            $table->string('kode_booking')->unique();

            $table->foreignId('id_pelanggan')
                ->constrained('users', 'id_user')
                ->cascadeOnDelete();

            $table->foreignId('id_jadwal')
                ->constrained('jadwal_tour', 'id_jadwal')
                ->cascadeOnDelete();

            $table->dateTime('tgl_pemesanan');

            $table->integer('jumlah_peserta');

            $table->decimal('total_bayar', 15, 2);

            $table->string('status_pemesanan');

            $table->text('catatan_revisi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};