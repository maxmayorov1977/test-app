<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'vendor_id' => rand(1, 25),
        'model_name' => $faker->name,
        'year_release' => rand(1969, 2020),
        'horse_power' => rand(120, 1200),
        'transmission_id' => rand(1, 2),
    ];
});
