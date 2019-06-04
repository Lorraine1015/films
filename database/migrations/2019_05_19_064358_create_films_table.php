<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('year');
            $table->time('duration');
            $table->string('link');

            $table->unsignedBigInteger('genre_id'); //añadimos a la tabla el elemento relacionado
            $table->foreign('genre_id')->references('id')->on('genres');//se el denota que es una llave foranea y de donde proviene
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
        Schema::dropIfExists('films');
    }
}
