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
        Schema::table('produk', function (Blueprint $table) {
            $table->unsignedBigInteger('umkm_id')->after('harga_produk')->nullable();
            $table->foreign('umkm_id')->references('id')->on('umkm')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['kelurahan_id']);
            $table->dropColumn('kelurahan_id');
        });
    }
};
