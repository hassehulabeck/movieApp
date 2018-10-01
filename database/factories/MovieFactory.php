<?php

use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
      'movieTitle' => $faker->name,
      'Year' => $faker->year,
      'category' => $faker->numberBetween($min=1,$max=8)
    ];
});
