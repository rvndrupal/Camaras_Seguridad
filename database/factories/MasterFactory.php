<?php

use Faker\Generator as Faker;

$factory->define(App\Master::class, function (Faker $faker) {
    return [
        'titulo'=> $faker->name,
        'nosotros'=>$faker->name,
        'noso_titulo'=>$faker->name,
        'noso_descri'=>$faker->name,
        //bloques pequeños
        'b1'=>$faker->name,
        'b2'=>$faker->name,
        'b3'=>$faker->name,
        'b4'=>$faker->name,
        'b5'=>$faker->name,
        'b6'=>$faker->name,
       
    ];
});
