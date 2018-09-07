<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-06
 * Time: 10:22
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Magic extends Model
{

    protected $table = 'magic';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'magic_id', 'magic_attribute', 'number_of_skills', 'magic_attribute_grade', 'skill_rating', 'number_free_spell', 'label', 'description', 'is_resonance'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_resonance' => 'boolean',
    ];
}
