<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Lesson;
$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'section_id' => 1,
        'name' => $faker->words(3, true),
        'content_url' => $faker->url
    ];
});
