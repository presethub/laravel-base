<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function (Faker $faker) {

    $verified = [now(), null];

    $gender = ['Male', 'Female'];
    $gender = $gender[array_rand($gender)];

    return [
        'name'              => $faker->name(strtolower($gender)),
        'gender'            => $gender,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => $verified[array_rand($verified)],
        'password'          => 'secret',
        'remember_token'    => Str::random(12),
        'created_at'        => $faker->dateTimeBetween('-1 years'),
        'updated_at'        => $faker->dateTimeBetween('-6 months'),
    ];

});
