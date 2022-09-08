<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->integer('hari');
            $table->string('day1');
            $table->string('day2');
            $table->string('day3');
            $table->string('day4');
            $table->string('day5');
            $table->text('kegiatan1','65000');
            $table->text('kegiatan2','65000');
            $table->text('kegiatan3','65000');
            $table->text('kegiatan4','65000');
            $table->text('kegiatan5','65000');
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
        Schema::dropIfExists('kegiatans');
    }
}
