<?php

use Faker\Generator as Faker;

$factory->define(\App\evenement::class, function (Faker $faker) {
    return [
        'titre'=>$faker->title,
        'contenu'=>$faker->text,
        'type'=>'evenement'
    ];
});
