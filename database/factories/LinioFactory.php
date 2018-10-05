<?php

use Faker\Generator as Faker;

$factory->define(App\Linio::class, function (Faker $faker) {
  return [
    'number' => $faker->numberBetween(1, 100),
  ];
});
