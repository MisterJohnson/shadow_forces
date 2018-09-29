<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-09-27
 * Time: 18:39
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Metatype extends Model
{
    protected $table = 'metatypes';
    protected $fillable = [
        'metatype',
        'traits_label',
        'traits_id',
        'special_points',
        'priority_avail',
        'metatype_parent',
        'metatype_category',
        'attributes_id',
        'karma_cost',
    ];

    public const PARENT_METATYPE = [
        'none' => 'None',
        'human' => 'metatype.human.title',
        'elf' => 'metatype.elf.title',
        'dwarf' => 'metatype.dwarf.title',
        'ork' => 'metatype.ork.title',
        'troll' => 'metatype.troll.title',
    ];

    public const METATYPE_CATEGORY = [
        'metatype' => 'metatype.title.metatype',
        'metavariants' => 'metatype.title.metavariants',
        'metasapient_races' => 'metatype.title.metasapient_races',
        'shapeshifter' => 'metatype.title.shapeshifter',
        'ai_races' => 'metatype.title.ai_races',
    ];
}
