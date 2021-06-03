<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker -> name($gender = null),
        'lastname' => $faker -> lastname,
        'nationality' => $faker -> state,
        'date_of_birth' => $faker -> date($format = 'Y-m-d', $max = 'now'),
    ];
});
