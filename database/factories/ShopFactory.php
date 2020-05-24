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

$factory->define(\App\Shops::class, function (Faker $faker) {
    $images = [
        'shop-item-1.jpg',
        'shop-item-2.jpg',
        'shop-item-3.jpg',
        'shop-item-4.jpg',
        'shop-item-5.jpg',
        'shop-item-6.jpg'

    ];
    $names=[
        "BAXTER OF CALIFORNIA",
        "SUAVETICO",
        "AMERICAN CREW"

    ];
    $types=[
        "care",
        "razor",
        "acces"
    ];



    return [
        'manufacturer' => $names[array_rand($names)],
        'img' => $images[array_rand($images)],
        'description' => $faker->text,
        'type'=>$types[array_rand($types)]
    ];
});
