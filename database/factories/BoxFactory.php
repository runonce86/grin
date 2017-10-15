<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Box::class, function (Faker $faker) {

    return [
        'foreign_id'  => $faker->randomDigit,
        'temperature' => $faker->numberBetween(0, 80),
        'humidity'    => $faker->numberBetween(0, 95),
        'lights'      => $faker->boolean(50)
    ];
});
