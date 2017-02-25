<?php

use Illuminate\Database\Seeder;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 50)->create()->each(function ($u) {
           $u->heroes()->save(factory(App\Hero::class)->make());
           $u->heroes()->save(factory(App\Hero::class)->make());
           $u->heroes()->save(factory(App\Hero::class)->make());
        });
    }
}
