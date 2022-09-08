<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->string('faq1');
            $table->string('faq2');
            $table->string('faq3');
            $table->string('faq4');
            $table->string('faq5');
            $table->string('faq6');
            $table->string('faq7');
            $table->string('faq8');
            $table->string('faq9');
            $table->string('faq10');
            $table->string('faq11');
            $table->string('faq12');
            $table->string('faq13');
            $table->string('faq14');
            $table->string('faq15');
            $table->text('deskripsi1','65000');
            $table->text('deskripsi2','65000');
            $table->text('deskripsi3','65000');
            $table->text('deskripsi4','65000');
            $table->text('deskripsi5','65000');
            $table->text('deskripsi6','65000');
            $table->text('deskripsi7','65000');
            $table->text('deskripsi8','65000');
            $table->text('deskripsi9','65000');
            $table->text('deskripsi10','65000');
            $table->text('deskripsi11','65000');
            $table->text('deskripsi12','65000');
            $table->text('deskripsi13','65000');
            $table->text('deskripsi14','65000');
            $table->text('deskripsi15','65000');
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
        Schema::dropIfExists('faqs');
    }
}
