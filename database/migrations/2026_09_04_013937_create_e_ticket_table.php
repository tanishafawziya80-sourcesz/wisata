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
        Schema::create('e_ticket', function (Blueprint $table) {
            $table->id('id_ticket');

            $table->foreignId('id_pemesanan')
                ->constrained('pemesanan', 'id_pemesanan')
                ->cascadeOnDelete();

            $table->string('nomor_ticket')->unique();
            $table->string('file_pdf');
            $table->date('tgl_terbit');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_ticket');
    }
};