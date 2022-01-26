<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        
        'name'=>$faker->name(),
        'release_date'=>$faker->date(),

        'collaboration_names'=>$faker->name(),
        'song_text'=>$faker->word(),
        
        'price'=>$faker->numberBetween(500, 10000),

    ];
});
