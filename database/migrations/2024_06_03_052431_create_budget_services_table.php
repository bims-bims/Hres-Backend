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
        Schema::create('budget_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nama_perusahaan_id')->constrained('office_users')->on('id')->select('nama_perusahaan');
            $table->string('deskripsi');
            $table->string('spare_part');
            $table->string('jumlah_transaksi');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget_services');
    }
};
