<?php

use App\Product;
use Faker\Generator as Faker;

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

$factory->define(Product::class, function (Faker $faker) {
    $productName = $faker->word;
    return [
        'sku' => str_limit($productName, 3,'').'-'.$faker->unique()->numberBetween(1,99),
        'name' => $faker->colorName.' '.$productName,
        'price' => $faker->numberBetween(1,25)
    ];
});
