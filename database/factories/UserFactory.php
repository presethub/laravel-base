<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function (Faker $faker) {

    $gender = ['Male', 'Female'];
    $gender = $gender[mt_rand(0, count($gender) - 1)];

    return [
        'name'              => $faker->name(strtolower($gender)),
        'gender'            => $gender,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => 'secret',
        'remember_token'    => Str::random(12),
    ];

});
