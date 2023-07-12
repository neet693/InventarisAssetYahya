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
        Schema::create('informasi__keuangan__assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asset_id')->constrained()->onDelete('cascade');
            $table->float('harga');
            $table->string('metode_pembayaran');
            $table->float('nilai_sisa');
            $table->string('metode_depresiasi');
            $table->integer('umur_ekonomis');
            $table->date('tanggal_mulai_depresiasi');
            $table->float('tarif_depresiasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi__keuangan__assets');
    }
};
