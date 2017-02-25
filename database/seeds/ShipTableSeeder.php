<?php

use App\Ship;
use Illuminate\Database\Seeder;

class ShipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ship::class,10)->create();
    }
}
