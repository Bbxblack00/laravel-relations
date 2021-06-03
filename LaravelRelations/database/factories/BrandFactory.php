<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        protected $table = 'brands';
        protected $fillable = [
            'name',
            'nationality',
        ];
    ];
});
