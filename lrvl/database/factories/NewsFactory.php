<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
//use Faker\Generator as Faker;

$factory->define(News::class, function () {
    $faker = Faker\Factory::create('ru_RU');
    return [
        'title' => $faker->sentence(rand(3,6)),
        'text' => $faker->realText(rand(200,500)),
        'isPrivate' => $faker->boolean,
        'image' => null,
        'category_id' => (rand(1, 2))
    ];
});
