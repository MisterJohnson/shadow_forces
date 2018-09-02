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

$factory->define(App\Weapon::class, function (Faker $faker) {
    return [
        'name' => 'Shiawase Arms Monsoon',
        'damage_rating' => '10P',
        'armor_penetration' => -1,
        'description' => 'The latest addition to Shiawase’s “Magazine Barrel” line,
                the Monsoon is a soldier’s dream, with the ammunition
                contained within the barrels. The Monsoon resists the
                environment’s harshest conditions and remains nearly
                maintenance free. As long as the user simply needs to
                ensure the barrels are not heavily plugged up and the
                bullets will fly toward their intended target, aided by the
                integral smartlink system, which is protected in its own
                shock-proof housing.',
        'accuracy' => 5,
        'mode' => 'SA/FA',
        'ammo_capacity' => '20(ml) x6',
        'recoil_compensation' => 1,
        'range' => 'Assault Rifle: 25/150/300/550',
        'cost' => 1900.00,
        'availability' => '10F',
        'manufacturer' => 'Shiawase',
        'device_rating' => 2,
        'upgrades' => '10, 3',
        'source' => 'Gun Heaven 3',
    ];
});
