<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EnrolmentLesson;
use Faker\Generator as Faker;
use App\Enrolment;
use App\Lesson;

$factory->define(EnrolmentLesson::class, function (Faker $faker) {
    return [
        'enrolment_id' => function () {
            return factory(Enrolment::class)->create()->id;
        },
        'lesson_id' => function () {
            return factory(Lesson::class)->create()->id;
        }
    ];
});
