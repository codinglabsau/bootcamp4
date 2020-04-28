<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\EnrolmentAssessmentItem;
use App\Enrolment;
use App\AssessmentItem;

$factory->define(EnrolmentAssessmentItem::class, function (Faker $faker) {
    return [
        'enrolment_id' => function () {
            return factory(Enrolment::class)->create()->id;
        },
        'assessment_item_id' => function () {
            return factory(AssessmentItem::class)->create()->id;
        },
        'mark' => $faker->numberBetween(0, 10)
    ];
});
