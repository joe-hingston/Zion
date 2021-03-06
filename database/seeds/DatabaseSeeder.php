<?php

use App\Ship;
use App\ShipUpgrade;
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
        $this->call(UpgradeSeederTable::class);


        DB::table('users')->insert([
            'name'=>'Joe',
            'email' => 'joe.hingston@outlook.com',
            'password' => '$2y$10$xhZIafmjrSoVMBXuomzO4e/pcmSzn/hzox.YJ7S0Gbki0GRciA2Qu',
            'taers'=>2000,
        ]);
        DB::table('users')->insert([
            'name'=>'Aaron',
            'email' => 'afletcher53@gmail.com',
            'password' => '$2y$10$zD4wqD1BdkXJ/OaHQRGofu2Tvsb8Hm2B55PkSnFwi6NvDPJElaRR2',
            'taers'=>2000,
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


    }
}
