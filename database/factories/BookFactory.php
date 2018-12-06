<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' 		=> $faker->text(10),
        'author'		=> $faker->name,
        'description' 	=> $faker->text(250),
        'publisher'		=> $faker->text(10),
        'price'			=> rand(250,5000),
    ];
});
