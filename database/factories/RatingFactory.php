<?php

use App\Models\Rating;
use Faker\Generator as Faker;

$factory->define(App\Models\Rating::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->randomNumber(8),
        'book_id' => $faker->unique()->randomNumber(3),
        'rating' => $faker->numberBetween(1,5)
    ];
});
