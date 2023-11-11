<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('data_siswa_jurusan', function (Blueprint $table) {
            $table->id(); // Kolom "id" sebagai auto-increment
            $table->year('tahun');
            $table->Int('otomotif');
            $table->Int('media_desain');
            $table->Int('tkk');
            $table->Int('manajemen_bisnis');
            $table->Int('akuntansi_keuangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
};
