<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$eszFBRnKnPC/WQ//IpXrCOLKAPUVk4ZTg7IGgNbcxlLIfN/0f.6tO', // 123456
        'remember_token' => Str::random(10),
    ];
});
