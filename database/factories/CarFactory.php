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

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->sentence(1, true),
        'model'=> $faker->sentence(1, true),
        'year' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'maxSpeed' => $faker->numberBetween($min = 130, $max = 210),
        'isAutomatic' =>  $faker->boolean,
        'engine' => $faker->randomElement($array = ['diesel','petrol','electric']),
        'numberOfDoors' => $faker->numberBetween($min = 2, $max = 5),
    ];
});


