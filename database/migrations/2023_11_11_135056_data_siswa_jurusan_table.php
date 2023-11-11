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
            $table->Integer('otomotif');
            $table->Integer('media_desain');
            $table->Integer('tkk');
            $table->Integer('manajemen_bisnis');
            $table->Integer('akuntansi_keuangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_siswa');
    }
};
