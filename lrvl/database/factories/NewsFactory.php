<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {

    return [
        'title' => $faker->realText(rand(10,20)),
        'text' => $faker->realText(rand(200,500)),
        'isPrivate' => $faker->boolean,
        'image' => null,
        'category_id' => (rand(1, 2))
    ];
});
