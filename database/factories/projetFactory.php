<?php

use Faker\Generator as Faker;

$factory->define(\App\projets::class, function (Faker $faker) {
    return [
        'nom'=>$faker->title
    ];
});
