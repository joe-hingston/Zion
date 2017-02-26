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
        'taers'=>$faker->numberBetween(1,1000000),
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


$factory->define(App\ShipUpgrade::class, function (Faker\Generator $faker) {

    return [
        'upgrade_cost' => $faker->numberBetween($min = 1, $max = 2000),
        'upgrade_experience_cost' => $faker->numberBetween($min = 1, $max = 2000),
        'upgrade_name' => $faker->name,
        'upgrade_description' => $faker->text($maxNbChars = 200),
        'upgrade_function' => $faker->numberBetween($min = 0, $max = 10),
        'upgrade_durability' => $faker->numberBetween($min = 0, $max = 20000),
    ];
});




//Schema::create('ship_upgrades', function (Blueprint $table) {
//    $table->increments('id');
//    $table->integer('upgrade_cost')->nullable()->unsigned();
//    $table->integer('upgrade_experience_cost')->nullable()->unsigned();
//    $table->string('upgrade_name');
//    $table->text('upgrade_description');
//    $table->integer('upgrade_function'); //item function stored as an integer
//    $table->integer('upgrade_durability');
//    $table->timestamps();
//});
//}



