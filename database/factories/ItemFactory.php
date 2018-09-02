<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'name' => 'Contacts',
        'device_rating' => 2,
        'description' => 'The most recent display devices are worn directly on the eyes, They are nearly undetectable, but they offer a bit of space for enhancements.' .
            ' Contacts have to be wireless; they don\'t have room for a universal data connector',
        'availability' => 6,
        'cost' => 200.00,
        'capacity' => '1-3',
        'rating_max' => 3,
        'source' => 'core rulebook',
        'category' => 'Optical & Imaging Devices',
        'is_cost_dynamic' => true,
        'is_avail_dynamic' => true,
    ];
});
