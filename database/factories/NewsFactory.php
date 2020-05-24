<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\News::class, function (Faker $faker) {
    $images = [
        'news-1.jpg',
        'news-2.jpg',
        'news-3.jpg',
        'news-4.jpg'
    ];

    return [
        'title' => $faker->streetName,
        'img' => $images[array_rand($images)],
        'description' => $faker->text
    ];
});
