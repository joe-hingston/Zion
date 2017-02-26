<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipUpgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_upgrades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('upgrade_cost')->nullable()->unsigned();
            $table->integer('upgrade_experience_cost')->nullable()->unsigned();
            $table->string('upgrade_name');
            $table->text('upgrade_description');
            $table->integer('upgrade_function'); //item function stored as an integer
            $table->integer('upgrade_durability');
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
        Schema::dropIfExists('ship_upgrades');
    }
}
