<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Marketplace\Models\ProductsModel::class, function (Faker $faker) {
    return [
        'prod_name' => $faker->name,
        'prod_description' => $faker->sentence,
        'prod_body' => $faker->paragraph(5, true),
        'prod_price' => $faker->randomFloat(2,10),
        'prod_slug' => $faker->slug,
    ];
});
