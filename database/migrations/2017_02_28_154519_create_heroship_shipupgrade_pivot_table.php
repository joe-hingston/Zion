<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroshipShipupgradePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroship_shipupgrade', function (Blueprint $table) {
            $table->integer('heroship_id')->unsigned()->index();
            $table->foreign('heroship_id')->references('id')->on('hero_ships')->onDelete('cascade');
            $table->integer('shipupgrade_id')->unsigned()->index();
            $table->foreign('shipupgrade_id')->references('id')->on('ship_upgrades')->onDelete('cascade');
            $table->primary(['heroship_id', 'shipupgrade_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('heroship_shipupgrade');
    }
}
