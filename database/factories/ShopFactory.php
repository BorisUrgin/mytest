<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Manufacturer;
use App\Category;
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
    $manufacturerIds = Manufacturer::all()->pluck('id')->toArray();
    $categoryIds = Category::all()->pluck('id')->toArray();

    return [
        'manufacturer_id' => $manufacturerIds[array_rand($manufacturerIds)],
        'img' => $images[array_rand($images)],
        'description' => $faker->text,
        'category_id'=>$categoryIds[array_rand($categoryIds)]
    ];
});
