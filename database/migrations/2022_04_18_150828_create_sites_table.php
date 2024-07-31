<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); //nama desa
            $table->string('short_description'); //deskripsi singkat desa
            $table->text('description'); //deskripsi lengkap desa
            $table->text('address'); //alamat desa
            $table->string('latitude'); //latitude desa
            $table->string('longitude'); //longitude desa
            $table->string('phone'); //nomor telepon desa
            $table->string('email'); //email desa
            $table->string('facebook'); //facebook desa
            $table->string('instagram'); //instagram desa
            $table->string('video'); //video desa
            $table->string('image'); //gambar desa
            $table->string('logo'); //logo desa
            $table->text('visi'); //visi desa
            $table->text('misi'); //misi desa
            $table->string('struktur'); //struktur organisasi desa
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
        Schema::dropIfExists('sites');
    }
}
