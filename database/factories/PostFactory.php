<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Model\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $faker->slug,
        'body' => $faker->paragraph,
        'image' => null,
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'like' => null,
        'dislike' => null,
        'category_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
