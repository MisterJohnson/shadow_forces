<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-06
 * Time: 10:08
 */

namespace App;


class Character
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'priority_id', 'magic_id', 'starting_attributes_id', 'final_attributes_id', 'essence', 'starting_karma', 'total_karma', 'qualities_id', 'gears_id', 'skills_id', 'augment_id',
        'magic_id', 'armor_id', 'weapon_id', 'matrix_id', 'vehicules_id', 'socials_id'
    ];
}
