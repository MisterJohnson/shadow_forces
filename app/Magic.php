<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-06
 * Time: 10:22
 */

namespace App;


class Magic
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'magic_id', 'magic_attribute', 'number_of_skills', 'skill_rating', 'number_free_spell', 'label', 'description'
    ];
}
