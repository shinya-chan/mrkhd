<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'pic' => $faker->text(),
        'title' => $faker->text(),
        'description' => $faker->paragraph()
    ];
});
