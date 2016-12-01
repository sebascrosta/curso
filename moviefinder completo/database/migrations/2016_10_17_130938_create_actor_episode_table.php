<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * CREATE TABLE actor_episodio (
         *     id                  INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
         *     id_actor            INT UNSIGNED NOT NULL,
         *     id_episodio         INT UNSIGNED NOT NULL,
         *     FOREIGN KEY (id_actor) REFERENCES actor(id),
         *     FOREIGN KEY (id_episodio) REFERENCES episodio(id)
         * );
         */
        Schema::create('actor_episode', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('actor_id');
            $table->unsignedInteger('episode_id');

            $table->foreign('actor_id')->references('id')->on('actors');
            $table->foreign('episode_id')->references('id')->on('episodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_episode');
    }
}
