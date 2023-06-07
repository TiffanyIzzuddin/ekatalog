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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nama_umkm');
            $table->string('nama_pemilik');
            $table->string('alamat_umkm');
            $table->string('no_telp_umkm');
            $table->string('url_instagram');
            $table->string('url_umkm')->nullable();
            $table->string('logo_umkm')->nullable();
            $table->string('keterangan_umkm');
            $table->string('status_umkm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
