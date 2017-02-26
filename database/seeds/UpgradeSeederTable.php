<?php

use App\ShipUpgrade;
use Illuminate\Database\Seeder;

class UpgradeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ShipUpgrade::class,10)->create();
    }
}
