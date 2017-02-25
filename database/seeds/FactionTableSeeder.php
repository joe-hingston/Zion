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
            'description' => '3Edgy5U',
        ]);
        DB::table('factions')->insert([
            'name'=>'SpaceCowboys',
            'description' => 'Loves to ride bareback',
        ]);
    }
}
