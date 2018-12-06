<?php

use Faker\Generator as Faker;
//use App\Category as Category;


$factory->define(App\Album::class, function (Faker $faker) {
    return [
        //'title'	=> $faker->text(25),
        //'body'  => $faker->text(200),

        'title' 		=> $faker->paragraph(1),
        'description' 	=> $faker->paragraph(4),
        'type' 			=> 'Popunjen',
        'price'			=> rand(250,5000),
    ];
});



