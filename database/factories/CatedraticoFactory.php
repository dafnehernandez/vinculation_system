<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Catedratico;
use Faker\Generator as Faker;

$factory->define(Catedratico::class, function (Faker $faker) {

    return [
        'nombre_catedratico' => $faker->word,
        'apellidos_catedratico' => $faker->word,
        'especialidad_catedratico' => $faker->word,
        'rfc_catedratico' => $faker->word,
        'usuario_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
