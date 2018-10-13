<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-06
 * Time: 10:42
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_id',
        'body_min',
        'body_max',
        'agility_min',
        'agility_max',
        'reaction_min',
        'reaction_max',
        'strength_min',
        'strength_max',
        'willpower_min',
        'willpower_max',
        'logic_min',
        'logic_max',
        'intuition_min',
        'intuition_max',
        'charisma_min',
        'charisma_max',
        'edge_min',
        'edge_max',
        'magic',
        'essence',
        'initiative',
        'movement'
    ];

    public const A = 'A', B = 'B', C = 'C', D = 'D', E = 'E';
}
