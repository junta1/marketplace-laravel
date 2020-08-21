<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Marketplace\Models\StoresModel::class, function (Faker $faker) {
    return [
        'stor_name' => $faker->name,
        'stor_description' => $faker->sentence,
        'stor_phone' => $faker->phoneNumber,
        'stor_mobile_phone' => $faker->phoneNumber,
        'stor_slug' => $faker->slug,
    ];
});
