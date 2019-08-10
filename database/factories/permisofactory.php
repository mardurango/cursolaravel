<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\permiso;

$factory->define(permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'slug' => $faker->word,
    ];
});
