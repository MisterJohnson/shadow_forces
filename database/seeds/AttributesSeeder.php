<?php

use App\Attributes;
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-10-02
 * Time: 23:14
 */

class AttributesSeeder extends Seeder
{
    public function run()
    {
        $human = Attributes::create([
            'character_id' => 0,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 2,
            'edge_max' => 7,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $elf = Attributes::create([
            'character_id' => 1,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 3,
            'charisma_max' => 8,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $dwarf = Attributes::create([
            'character_id' => 2,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 5,
            'strength_min' => 3,
            'strength_max' => 8,
            'willpower_min' => 2,
            'willpower_max' => 7,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1'
        ]);

        $ork = Attributes::create([
            'character_id' => 3,
            'body_min' => 4,
            'body_max' => 9,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 3,
            'strength_max' => 8,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $troll = Attributes::create([
            'character_id' => 4,
            'body_min' => 5,
            'body_max' => 10,
            'agility_min' => 1,
            'agility_max' => 5,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 5,
            'strength_max' => 10,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 5,
            'charisma_min' => 1,
            'charisma_max' => 4,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $natarki = Attributes::create([
            'character_id' => 5,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 2,
            'edge_max' => 7,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $dryad = Attributes::create([
            'character_id' => 6,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 5,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 3,
            'charisma_max' => 8,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $nocturna = Attributes::create([
            'character_id' => 7,
            'body_min' => 1,
            'body_max' => 5,
            'agility_min' => 3,
            'agility_max' => 8,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1'
        ]);

        $wakyambi = Attributes::create([
            'character_id' => 8,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $xapiri_thepe = Attributes::create([
            'character_id' => 9,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $gnome = Attributes::create([
            'character_id' => 10,
            'body_min' => 1,
            'body_max' => 4,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 4,
            'willpower_min' => 1,
            'willpower_max' => 7,
            'logic_min' => 2,
            'logic_max' => 7,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $hanuman = Attributes::create([
            'character_id' => 11,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 2,
            'strength_max' => 7,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1'
        ]);

        $koborokuru = Attributes::create([
            'character_id' => 12,
            'body_min' => 2,
            'body_max' => 7,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 2,
            'strength_max' => 7,
            'willpower_min' => 2,
            'willpower_max' => 7,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $menehune = Attributes::create([
            'character_id' => 13,
            'body_min' => 2,
            'body_max' => 7,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 5,
            'strength_min' => 2,
            'strength_max' => 7,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $hobgoblin = Attributes::create([
            'character_id' => 14,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 2,
            'strength_max' => 7,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $ogre = Attributes::create([
            'character_id' => 15,
            'body_min' => 4,
            'body_max' => 9,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 5,
            'strength_min' => 3,
            'strength_max' => 8,
            'willpower_min' => 2,
            'willpower_max' => 7,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 4,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $oni = Attributes::create([
            'character_id' => 16,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 2,
            'strength_max' => 7,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $satyr = Attributes::create([
            'character_id' => 17,
            'body_min' => 2,
            'body_max' => 7,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 2,
            'reaction_max' => 7,
            'strength_min' => 2,
            'strength_max' => 7,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $cyclops = Attributes::create([
            'character_id' => 18,
            'body_min' => 5,
            'body_max' => 10,
            'agility_min' => 1,
            'agility_max' => 5,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 6,
            'strength_max' => 11,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 4,
            'intuition_min' => 1,
            'intuition_max' => 5,
            'charisma_min' => 1,
            'charisma_max' => 4,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1'
        ]);

        $fomorian = Attributes::create([
            'character_id' => 19,
            'body_min' => 4,
            'body_max' => 9,
            'agility_min' => 1,
            'agility_max' => 5,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 5,
            'strength_max' => 10,
            'willpower_min' => 1,
            'willpower_max' => 5,
            'logic_min' => 1,
            'logic_max' => 4,
            'intuition_min' => 1,
            'intuition_max' => 4,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1'
        ]);

        $giant = Attributes::create([
            'character_id' => 20,
            'body_min' => 5,
            'body_max' => 10,
            'agility_min' => 1,
            'agility_max' => 5,
            'reaction_min' => 1,
            'reaction_max' => 5,
            'strength_min' => 5,
            'strength_max' => 10,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 5,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1'
        ]);

        $minotaur = Attributes::create([
            'character_id' => 21,
            'body_min' => 6,
            'body_max' => 11,
            'agility_min' => 1,
            'agility_max' => 5,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 5,
            'strength_max' => 10,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 4,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 0,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+1 '
        ]);

        /* ===== Metasapients ===== */

        $centaur = Attributes::create([
            'character_id' => 22,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 3,
            'strength_max' => 8,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 5,
            'charisma_min' => 1,
            'charisma_max' => 5,
            'edge_min' => 1,
            'edge_max' => 5,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x1/x4/+4'
        ]);

        $naga = Attributes::create([
            'character_id' => 23,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 1,
            'agility_max' => 4,
            'reaction_min' => 2,
            'reaction_max' => 7,
            'strength_min' => 4,
            'strength_max' => 9,
            'willpower_min' => 2,
            'willpower_max' => 7,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 5,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        $pixie = Attributes::create([
            'character_id' => 24,
            'body_min' => 1,
            'body_max' => 2,
            'agility_min' => 3,
            'agility_max' => 8,
            'reaction_min' => 3,
            'reaction_max' => 8,
            'strength_min' => 1,
            'strength_max' => 2,
            'willpower_min' => 3,
            'willpower_max' => 8,
            'logic_min' => 2,
            'logic_max' =>7,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 3,
            'charisma_max' => 8,
            'edge_min' => 2,
            'edge_max' => 7,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x1/x2/+1,x2/x6/+2'
        ]);

        $sasquatch = Attributes::create([
            'character_id' => 25,
            'body_min' => 6,
            'body_max' => 11,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 5,
            'strength_max' => 10,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x4/+2'
        ]);

        /* ===== Shapeshifter ===== */

        $bovine_shapeshifter = Attributes::create([
            'character_id' => 26,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 1,
            'agility_max' => 4,
            'reaction_min' => 1,
            'reaction_max' => 4,
            'strength_min' => 4,
            'strength_max' => 9,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x1/x4/+1'
        ]);

        $canine_shapeshifter = Attributes::create([
            'character_id' => 27,
            'body_min' => 1,
            'body_max' => 5,
            'agility_min' => 1,
            'agility_max' => 6,
            'reaction_min' => 2,
            'reaction_max' => 7,
            'strength_min' => 1,
            'strength_max' => 5,
            'willpower_min' => 2,
            'willpower_max' => 7,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 5,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x2/x6/+3'
        ]);

        $equine_shapeshifter = Attributes::create([
            'character_id' => 28,
            'body_min' => 4,
            'body_max' => 9,
            'agility_min' => 1,
            'agility_max' => 4,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 5,
            'strength_max' => 10,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 6,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x1/x4/+4'
        ]);

        $falconine_shapeshifter = Attributes::create([
            'character_id' => 29,
            'body_min' => 1,
            'body_max' => 4,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 3,
            'reaction_max' => 8,
            'strength_min' => 1,
            'strength_max' => 4,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '2d6',
            'movement' => 'x1/x2/+0.5,x2/x6/+2'
        ]);

        $leonine_shapeshifter = Attributes::create([
            'character_id' => 30,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 5,
            'logic_min' => 1,
            'logic_max' => 4,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '2d6',
            'movement' => 'x2/x5/+2'
        ]);

        $lupine_shapeshifter = Attributes::create([
            'character_id' => 31,
            'body_min' => 1,
            'body_max' => 6,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '2d6',
            'movement' => 'x1/x5/+3'
        ]);

        $pantherine_shapeshifter = Attributes::create([
            'character_id' => 32,
            'body_min' => 2,
            'body_max' => 7,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 2,
            'reaction_max' => 7,
            'strength_min' => 1,
            'strength_max' => 6,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 3,
            'intuition_max' => 8,
            'charisma_min' => 3,
            'charisma_max' => 8,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '2d6',
            'movement' => 'x1/x5/+2'
        ]);

        $tigrine_shapeshifter = Attributes::create([
            'character_id' => 33,
            'body_min' => 3,
            'body_max' => 8,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 2,
            'reaction_max' => 7,
            'strength_min' => 3,
            'strength_max' => 8,
            'willpower_min' => 1,
            'willpower_max' => 5,
            'logic_min' => 1,
            'logic_max' => 4,
            'intuition_min' => 3,
            'intuition_max' => 8,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '2d6',
            'movement' => 'x1/x5/+2'
        ]);

        $ursine_shapeshifter = Attributes::create([
            'character_id' => 34,
            'body_min' => 6,
            'body_max' => 11,
            'agility_min' => 1,
            'agility_max' => 5,
            'reaction_min' => 1,
            'reaction_max' => 5,
            'strength_min' => 7,
            'strength_max' => 12,
            'willpower_min' => 1,
            'willpower_max' => 5,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 1,
            'intuition_max' => 6,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x1/x3/+2'
        ]);

        $vulpine_shapeshifter = Attributes::create([
            'character_id' => 35,
            'body_min' => 1,
            'body_max' => 4,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 6,
            'strength_min' => 1,
            'strength_max' => 4,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 1,
            'logic_max' => 5,
            'intuition_min' => 2,
            'intuition_max' => 7,
            'charisma_min' => 2,
            'charisma_max' => 7,
            'edge_min' => 1,
            'edge_max' => 4,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '2d6',
            'movement' => 'x1/x3/+2'
        ]);

        /* ===== AI Races ===== */

        $metasapient_ai = Attributes::create([
            'character_id' => 36,
            'body_min' => 1,
            'body_max' => 4,
            'agility_min' => 2,
            'agility_max' => 7,
            'reaction_min' => 1,
            'reaction_max' => 5,
            'strength_min' => 1,
            'strength_max' => 4,
            'willpower_min' => 1,
            'willpower_max' => 6,
            'logic_min' => 2,
            'logic_max' => 7,
            'intuition_min' => 1,
            'intuition_max' => 5,
            'charisma_min' => 1,
            'charisma_max' => 6,
            'edge_min' => 1,
            'edge_max' => 6,
            'magic' => 1,
            'essence' => 6,
            'initiative' => '1d6',
            'movement' => 'x1'
        ]);
    }
}