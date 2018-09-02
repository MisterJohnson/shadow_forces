<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'damage_rating', 'armor_penetration', 'description' , 'accuracy' , 'mode', 'ammo_capacity',
        'recoil_compensation', 'range', 'cost', 'availability', 'manufacturer', 'device_rating', 'upgrades', 'source'
    ];
}
