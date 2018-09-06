<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-06
 * Time: 10:42
 */

namespace App;


class Attributes
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_id', 'body', 'agility', 'reaction', 'strength', 'willpower', 'logic', 'intuition', 'charisma', 'edge', 'magic'
    ];
}
