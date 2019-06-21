<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Contact::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'apellido' => $faker->lastName,
        'telefono' => $faker->creditCardNumber
    ];
});
