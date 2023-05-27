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
        Schema::table('kelurahan', function (Blueprint $table) {
            $table->unsignedBigInteger('kecamatan_id')->after('nama_kelurahan')->nullable();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelurahan', function (Blueprint $table) {
          $table->dropForeign(['kecamatan_id']);
          $table->dropColumn('kecamatan_id');
        });
    }
};
