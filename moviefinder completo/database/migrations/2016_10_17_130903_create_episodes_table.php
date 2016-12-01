<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE episodio (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo              VARCHAR(500) NULL,
         *     numero              INT UNSIGNED,
         *     fecha_de_estreno    DATE NOT NULL,
         *     rating              DECIMAL(3,1) UNSIGNED NOT NULL,
         *     id_temporada        INT UNSIGNED,
         *     FOREIGN KEY (id_temporada) REFERENCES temporada(id)
         * );
         */
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title', 500)->nullable();
            $table->unsignedInteger('number')->nullable();
            $table->dateTime('release_date');
            $table->decimal('rating', 3, 1);
            $table->unsignedInteger('season_id')->nullable();

            $table->foreign('season_id')->references('id')->on('seasons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
