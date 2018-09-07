<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'skill_id', 'skill_label', 'skill_type', 'description', 'is_group', 'group_skills_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_group' => 'boolean',
    ];

    public const CATEGORY = [
        'combat' => 'Combat Skills',
        'physical' => 'Physical Skills',
        'social' => 'Social Skills',
        'magical' => 'Magical Skills',
        'resonance' => 'Resonance Skills',
        'technical' => 'Technical Skills',
        'vehicle' => 'Vehicle Skills'
    ];
}
