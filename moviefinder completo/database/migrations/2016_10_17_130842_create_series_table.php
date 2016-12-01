<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE serie (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo              VARCHAR(500) NOT NULL,
         *     fecha_de_estreno    DATE NOT NULL,
         *     fecha_de_fin        DATE NOT NULL,
         *     id_genero           INT UNSIGNED,
         *     FOREIGN KEY (id_genero) REFERENCES genero(id)
         * );
         */
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title', 500);
            $table->dateTime('release_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('genre_id')->nullable();

            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}
