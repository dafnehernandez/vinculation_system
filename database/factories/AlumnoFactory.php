<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {

    return [
        'nombre_alumno' => $faker->word,
        'apellidos_alumno' => $faker->word,
        'domicilio_alumno' => $faker->word,
        'carrera_alumno' => $faker->word,
        'semestre_alumno' => $faker->word,
        'numcontrol_alumno' => $faker->word,
        'usuario_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
