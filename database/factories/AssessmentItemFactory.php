<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'assessment_id' => 1,
        'name' => $faker->word(3, true),
        'mark' => $faker->numberBetween($min = 0, $max = 100)
    ];
});
