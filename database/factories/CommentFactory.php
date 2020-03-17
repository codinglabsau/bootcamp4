<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->text(50),
        'course_id' => $faker->numberBetween(1, 15),
        'user_id' => $faker->numberBetween(1,2)
    ];
});
