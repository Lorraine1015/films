<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_film', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('catalog_id');
            $table->unsignedBigInteger('film_id');


            $table->timestamps();

            $table->foreign('catalog_id')->references('id')->on('catalogs');
            $table->foreign('film_id')->references('id')->on('films');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalog_film');
    }
}
