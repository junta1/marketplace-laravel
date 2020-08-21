<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Marketplace\Models\CategoriesModel::class, function (Faker $faker) {
    return [
        'cate_name' => $faker->name,
        'cate_description' => $faker->sentence,
        'cate_slug' => $faker->slug,
    ];
});
