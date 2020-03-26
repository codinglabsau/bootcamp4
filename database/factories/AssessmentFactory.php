<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Assessment;
use App\Section;

$factory->define(Assessment::class, function (Faker $faker) {
    return [
        'section_id' => function () {
            return factory(Section::class)->create()->id;
        },
    ];
});
