<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [

         'song'=> $faker->name(),
         'release'=> $faker->dateTimeAD(),

         'reference'=> $faker->paragraph(),
         'text'=> $faker-> text(300),

         'price'=> $faker->numberBetween(500, 10000),
         'company'=> $faker-> name(),
    ];
});

