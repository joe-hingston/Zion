<?php

use App\Ship;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Default Admin User

        $this->call(ShipTableSeeder::class);
        $this->call(FactionTableSeeder::class);
        $this->call(HeroTableSeeder::class);


        DB::table('users')->insert([
            'name'=>'Joe',
            'email' => 'joe.hingston@outlook.com',
            'password' => '$2y$10$xhZIafmjrSoVMBXuomzO4e/pcmSzn/hzox.YJ7S0Gbki0GRciA2Qu',
        ]);
        DB::table('heroes')->insert([
            'user_id'=>51,
            'hero_name'=>'RandomLetters',
            'faction_id' =>2
        ]);
        DB::table('heroes')->insert([
            'user_id'=>51,
            'hero_name'=>'RandomLetters2',
            'faction_id' =>1
        ]);
        DB::table('users')->insert([
            'name'=>'Aaron',
            'email' => 'afletcher53@gmail.com',
            'password' => '$2y$10$xhZIafmjrSoVMBXuomzO4e/pcmSzn/hzox.YJ7S0Gbki0GRciA2Qu',
        ]);



    }
}
