<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'surname' => $faker->lastName(), 

        'date' => $faker->date(),
        'genre' => $faker->text(),

        'biography' => $faker->text(300),
        'sold' => $faker->numberBetween(500, 10000),
    ];
});
