<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-06
 * Time: 10:12
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'character_id', 'magic_id', 'metatype', 'base_edge', 'base_magic', 'karma_cost', 'attributes', 'magic_skill_chosen', 'skills', 'resources'
    ];
}
