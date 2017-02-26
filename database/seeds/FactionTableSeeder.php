<?php

use Illuminate\Database\Seeder;

class FactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factions')->insert([
            'name'=>'Edgelord',
            'startingLong' => 15,
            'startingLat'=>5,
            'description' => '3Edgy5U',
            'ship_id'=>1,
        ]);
        DB::table('factions')->insert([
            'name'=>'SpaceCowboys',
            'startingLong' => 26,
            'startingLat'=>7,
            'description' => 'Loves to ride bareback',
            'ship_id'=>2,
        ]);
    }
}
