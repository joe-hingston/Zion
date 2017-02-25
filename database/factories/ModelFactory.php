<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Hero::class, function (Faker\Generator $faker) {

    return [
        'hero_name' => $faker->name,
        'faction_id' => $faker->numberBetween($min = 1, $max = 2),
        'hero_clan_id' => $faker->numberBetween($min = 0, $max = 1000),
        'hero_experience' => $faker->numberBetween($min = 0, $max = 20000),
    ];
});

$factory->define(App\Ship::class, function (Faker\Generator $faker) {

    return [
        'ship_name' => $faker->name,
        'ship_health' => $faker->numberBetween($min = 1, $max = 600),
        'ship_damage' => $faker->numberBetween($min = 0, $max = 600),
        'ship_slots' => $faker->numberBetween($min = 0, $max = 5),
        'ship_cost' => $faker->numberBetween($min = 0, $max = 50),
        'ship_experience_requirement' => $faker->numberBetween($min = 0, $max = 200.),
        'ship_description' => $faker->text($maxNbChars = 200),
        'ship_gender'=> 'male',
        'ship_colour'=>'black',
        'ship_type'=>$faker->text($maxNbChars = 15),
    ];
});





