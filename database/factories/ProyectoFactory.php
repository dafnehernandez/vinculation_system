<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {

    return [
        'nombre_proyecto' => $faker->word,
        'tipo_proyecto' => $faker->word,
        'numeroparticipantes_proyecto' => $faker->randomDigitNotNull,
        'tiempo_proyecto' => $faker->randomDigitNotNull,
        'requisitos_proyecto' => $faker->word,
        'descripcion_proyecto' => $faker->word,
        'empresa_proyecto' => $faker->word,
        'repempresa_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
