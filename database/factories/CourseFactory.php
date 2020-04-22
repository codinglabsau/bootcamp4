<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Section;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->words(4, true),
        'description' => $faker->paragraphs(5),
        'price' => $faker->numberBetween(500, 6000),
    ];
});
