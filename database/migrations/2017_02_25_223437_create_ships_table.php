<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ship_name');
            $table->integer('ship_health')->unsigned();
            $table->integer('ship_damage')->unsigned();
            $table->integer('ship_slots')->unsigned();
            $table->integer('ship_cost')->unsigned();
            $table->integer('ship_experience_requirement')->unsigned();
            $table->string('ship_colour');
            $table->text('ship_description');
            $table->string('ship_type');
            $table->string('ship_gender');
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
        Schema::dropIfExists('ships');
    }
}
