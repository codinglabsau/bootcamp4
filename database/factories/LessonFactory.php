<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Lesson;
use App\Section;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'section_id' => function () {
            return factory(Section::class)->create()->id;
        },
        'name' => $faker->words(3, true),
        'content_url' => $faker->url
    ];
});
