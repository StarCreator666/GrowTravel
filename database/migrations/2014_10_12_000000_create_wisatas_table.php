<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar');
            $table->text('lokasi');
            $table->text('exclusion','65000');
            $table->text('inclusion','65000');
            $table->text('deskripsi','65000');
            $table->text('add_ons','65000');
            $table->bigInteger('harga_awal');
            $table->bigInteger('harga_akhir');
            // $table->foreignId('kegiatan_id')->nullable();
            $table->string('day1')->nullable();
            $table->string('day2')->nullable();
            $table->string('day3')->nullable();
            $table->string('day4')->nullable();
            $table->string('day5')->nullable();
            $table->text('kegiatan1','65000')->nullable();
            $table->text('kegiatan2','65000')->nullable();
            $table->text('kegiatan3','65000')->nullable();
            $table->text('kegiatan4','65000')->nullable();
            $table->text('kegiatan5','65000')->nullable();
            $table->foreignId('faq_id')->nullable();
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
        Schema::dropIfExists('wisatas');
    }
}
