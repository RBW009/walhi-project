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
        Schema::create('bencanas', function (Blueprint $table) {
            $table->id();
            $table->String('latitude');
            $table->string('longitude');
            // $table->string('wilayah');
            // $table->string('bencana');
            $table->string('banjir');
            $table->String('gempa');
            $table->string('kebakaran');
            $table->string('puting_beliung');
            $table->string('longsor');
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
        Schema::dropIfExists('bencanas');
    }
};
