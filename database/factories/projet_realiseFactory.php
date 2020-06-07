<?php

use Faker\Generator as Faker;

$factory->define(\App\projet_realiser::class, function (Faker $faker) {
    return [
        'id_apprenant'=>1,
        'id_projet'=>1
    ];
});
