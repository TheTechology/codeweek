<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Importer;
use Faker\Generator as Faker;

$factory->define(Importer::class, function (Faker $faker) {
    return [
        'original_id' => $faker->numberBetween(10,1000),
        'website' => $faker->safeEmailDomain,
        'status' => 'ADDED'
    ];


});
