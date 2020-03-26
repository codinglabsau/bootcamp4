<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\AssessmentItem;
use App\Assessment;

$factory->define(AssessmentItem::class, function (Faker $faker) {
    return [
        'assessment_id' => function () {
            return factory(Assessment::class)->create()->id;
        },
        'name' => $faker->word(3, true),
        'mark' => $faker->numberBetween(0, 100)
    ];
});
