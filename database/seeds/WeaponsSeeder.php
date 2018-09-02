<?php

use App\Weapon;
use Illuminate\Database\Seeder;

class WeaponsSeeder extends Seeder
{
    /**
     * Run the items database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weapon1 = Weapon::create([
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
        ]);
    }
}
