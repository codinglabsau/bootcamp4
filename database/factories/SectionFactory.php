<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Section;
use App\Course;
use Faker\Generator as Faker;

$factory->define(Section::class, function (Faker $faker) {
    return [
        'course_id' => function () {
            return factory(Course::class)->create()->id;
        },
        'name' => $faker->words(4, true),
        'overview' => $faker->paragraph(3)
    ];
});
