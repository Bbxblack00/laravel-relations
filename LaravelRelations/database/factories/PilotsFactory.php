<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pilot;
use Faker\Generator as Faker;

$factory->define(Pilot::class, function (Faker $faker) {
    return [
        'name' => $faker -> name($gender = null),
        'lastname' => $faker -> lastname,
        'nationality' => $faker -> country,
        'date_of_birth' => $faker -> date($format = 'Y-m-Y', $max = 'now'),
    ];
});
