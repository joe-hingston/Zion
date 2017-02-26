<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('hero_name');
            $table->string('hero_gender')->nullable();
            $table->integer('faction_id')->nullable();
            $table->integer('hero_clan_id')->nullable();
            $table->integer('hero_experience')->default(0);
            $table->string('hero_latlong')->nullable();
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
        Schema::dropIfExists('heroes');
    }
}
