<?php

use Faker\Generator as Faker;

$factory->define(\App\apprenant::class, function (Faker $faker) {
    return [
        'nom'=>$faker->name,
        'prenom'=>$faker->firstName,
        'contact'=>$faker->phoneNumber,
        'statu'=>'apprenants',
        'entreprise_actuelle'=>$faker->company
    ];
});
