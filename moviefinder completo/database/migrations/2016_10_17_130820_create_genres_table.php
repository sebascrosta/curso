<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE genero (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     nombre              VARCHAR(100) NOT NULL,
         *     ranking             INT UNSIGNED NOT NULL UNIQUE,
         *     activo              TINYINT UNSIGNED DEFAULT 1 NOT NULL,
         *     fecha_de_creacion   DATE NOT NULL
         * );
         */
        Schema::create('genres', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name', 100);
            $table->unsignedInteger('ranking')->unique();
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
