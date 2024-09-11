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
        Schema::create('schedule_services', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kostumer');
            $table->date('tanggal_terakhir_service');
            $table->date('tanggal_service_selanjutnya');
            $table->string('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_services');
    }
};
