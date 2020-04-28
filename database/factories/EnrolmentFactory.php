<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Enrolment;
use App\User;
use App\Course;

$factory->define(Enrolment::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'course_id' => function () {
            return factory(Course::class)->create()->id;
        }
    ];
});
