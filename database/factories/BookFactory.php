<?php

use App\Book;
use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->unique()->randomNumber(8),
        'title'       => $faker->sentence(),
        'description' => $faker->text()
    ];
});
