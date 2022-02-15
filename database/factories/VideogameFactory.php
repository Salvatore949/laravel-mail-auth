<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        'titolo' => $faker ->word(2,true),
        'sottotitolo' => $faker ->sentence(),
        'rating' => $faker ->RandomElement(['0', '16', '18']),
    ];
});
