<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Admin\Permiso;
use Faker\Generator as Faker;


$factory->define(Permiso::class, function (Faker $faker) {
    //aqui se llenan los campos "nombre" y "slug" de la tabla permiso con informacion falsa
    return [
        'nombre' => $faker->name,
        'slug' => $faker->word,
    ];
});
