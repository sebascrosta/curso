<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE temporada (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo              VARCHAR(500) NULL,
         *     numero              INT UNSIGNED,
         *     fecha_de_estreno    DATE NOT NULL,
         *     fecha_de_fin        DATE NOT NULL,
         *     id_serie            INT UNSIGNED,
         *     FOREIGN KEY (id_serie) REFERENCES serie(id)
         * );
         */
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title', 500)->nullable();
            $table->unsignedInteger('number')->nullable();
            $table->dateTime('release_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('serie_id')->nullable();

            $table->foreign('serie_id')->references('id')->on('series');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasons');
    }
}
