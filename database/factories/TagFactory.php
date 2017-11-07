<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Model\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->str_random(8)
    ];
});
