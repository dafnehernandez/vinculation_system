<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrativo;
use Faker\Generator as Faker;

$factory->define(Administrativo::class, function (Faker $faker) {

    return [
        'nombre_admin' => $faker->word,
        'apellidos_admin' => $faker->word,
        'rfc_admin' => $faker->word,
        'puesto_admin' => $faker->word,
        'usuario_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
