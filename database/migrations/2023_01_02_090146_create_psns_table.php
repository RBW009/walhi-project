<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psns', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('lokasi');
            $table->string('ancaman');
            $table->string('deskripsi');
            $table->string('luas_terdampak');
            $table->string('jiwa_terdampak');
            $table->string('aktor');
            $table->string('sumber_dana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psns');
    }
};
