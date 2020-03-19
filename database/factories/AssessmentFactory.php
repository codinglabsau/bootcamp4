<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Asssessment;

$factory->define(Assessment::class, function (Faker $faker) {
    return [
        'section_id' => 1,
    ];
});
