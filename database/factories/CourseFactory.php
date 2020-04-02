<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->words(4, true),
        'description' => function () use ($faker) {
            $description = '';
            for ($i = 0; $i < 5; $i++) {
                $description .= $faker->words(15, true);
                $description .= $i < 4 ? "|" : '';
            }
            return $description;
        },
        'price' => $faker->numberBetween(500, 6000)
    ];
});
