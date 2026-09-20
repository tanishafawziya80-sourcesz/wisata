<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pemesanan')->after('id_pembayaran');
            $table->string('bukti_pembayaran')->nullable()->after('status_pembayaran');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->dropColumn([
                'id_pemesanan',
                'bukti_pembayaran',
                'created_at',
                'updated_at',
            ]);
        });
    }
};