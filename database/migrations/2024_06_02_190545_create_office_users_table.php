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
        Schema::create('office_users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('email_perusahaan');
            $table->string('password')->md5();
            $table->string('alamat_perusahaan');
            $table->string('nama_pimpinan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_users');
    }
};
