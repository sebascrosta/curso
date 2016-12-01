<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE pelicula (
         *     id      			    INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     titulo  			    VARCHAR(500) NOT NULL,
         *     rating  			    DECIMAL(3,1) UNSIGNED NOT NULL,
         *     premios 			    INT UNSIGNED DEFAULT 0 NOT NULL,
         *     fecha_de_estreno 	DATE NOT NULL,
         *     duracion 			INT UNSIGNED NULL,
         *     id_genero            INT UNSIGNED NULL,
         *     FOREIGN KEY (id_genero) REFERENCES genero(id)
         * );
         */
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('title', 500);
            $table->decimal('rating', 3, 1)->unsigned();
            $table->unsignedInteger('awards')->default(0);
            $table->dateTime('release_date');
            $table->unsignedInteger('length')->nullable();
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
        Schema::dropIfExists('movies');
    }
}
