<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker\Generator $faker) {
    return [
        'task' => $faker->sentence,
        'done' => rand(0,1),
    ];
});