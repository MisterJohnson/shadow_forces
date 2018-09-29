<?php

use App\Article;
use App\Metatype;
use Illuminate\Database\Seeder;

class MetatypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;

        $human = Metatype::create([
            'metatype' => 'Human',
            'traits_label' => 'metatype.traits.none',
            'traits_id' => $i++,
            'special_points' => '9,7,5,3,1',
            'priority_avail' => 'A,B,C,D,E',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metatype'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $elf = Metatype::create([
            'metatype' => 'Elf',
            'traits_label' => 'metatype.traits.elf',
            'traits_id' => $i++,
            'special_points' => '8,6,3,0,0',
            'priority_avail' => 'A,B,C,D',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metatype'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $dwarf = Metatype::create([
            'metatype' => 'Dwarf',
            'traits_label' => 'metatype.traits.dwarf',
            'traits_id' => $i++,
            'special_points' => '7,4,1,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metatype'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $ork = Metatype::create([
            'metatype' => 'Ork',
            'traits_label' => 'metatype.traits.ork',
            'traits_id' => $i++,
            'special_points' => '7,4,1,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metatype'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $troll = Metatype::create([
            'metatype' => 'Troll',
            'traits_label' => 'metatype.traits.troll',
            'traits_id' => $i++,
            'special_points' => '5,0,0,0,0',
            'priority_avail' => 'A,B',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metatype'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $natarki = Metatype::create([
            'metatype' => 'Nartaki',
            'traits_label' => 'metatype.traits.nartaki',
            'traits_id' => $i++,
            'special_points' => '9,7,5,3,1',
            'priority_avail' => 'A,B,C,D,E',
            'metatype_parent' => Metatype::PARENT_METATYPE['human'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $dryad = Metatype::create([
            'metatype' => 'Dryad',
            'traits_label' => 'metatype.traits.dryad',
            'traits_id' => $i++,
            'special_points' => '8,6,3,0,0',
            'priority_avail' => 'A,B,C,D',
            'metatype_parent' => Metatype::PARENT_METATYPE['elf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $nocturna = Metatype::create([
            'metatype' => 'Nocturna',
            'traits_label' => 'metatype.traits.nocturna',
            'traits_id' => $i++,
            'special_points' => '8,6,3,0,0',
            'priority_avail' => 'A,B,C,D',
            'metatype_parent' => Metatype::PARENT_METATYPE['elf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $wakyambi = Metatype::create([
            'metatype' => 'Wakyambi',
            'traits_label' => 'metatype.traits.wakyambi',
            'traits_id' => $i++,
            'special_points' => '8,6,3,0,0',
            'priority_avail' => 'A,B,C,D',
            'metatype_parent' => Metatype::PARENT_METATYPE['elf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 12,
        ]);

        $xapiri_thepe = Metatype::create([
            'metatype' => 'Xapiri Thëpë',
            'traits_label' => 'metatype.traits.xapiri_thepe',
            'traits_id' => $i++,
            'special_points' => '8,6,3,0,0',
            'priority_avail' => 'A,B,C,D',
            'metatype_parent' => Metatype::PARENT_METATYPE['elf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $gnome = Metatype::create([
            'metatype' => 'Gnome',
            'traits_label' => 'metatype.traits.gnome',
            'traits_id' => $i++,
            'special_points' => '7,4,1,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['dwarf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 7,
        ]);

        $hanuman = Metatype::create([
            'metatype' => 'Hanuman',
            'traits_label' => 'metatype.traits.hanuman',
            'traits_id' => $i++,
            'special_points' => '7,4,1,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['dwarf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 5,
        ]);

        $koborokuru = Metatype::create([
            'metatype' => 'Koborokuru',
            'traits_label' => 'metatype.traits.koborokuru',
            'traits_id' => $i++,
            'special_points' => '7,4,1,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['dwarf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);

        $menehune = Metatype::create([
            'metatype' => 'Menehune',
            'traits_label' => 'metatype.traits.menehune',
            'traits_id' => $i++,
            'special_points' => '7,4,1,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['dwarf'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 2,
        ]);

        $hobgoblin = Metatype::create([
            'metatype' => 'Hobgoblin',
            'traits_label' => 'metatype.traits.hobgoblin',
            'traits_id' => $i++,
            'special_points' => '7,4,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['ork'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 5,
        ]);

        $ogre = Metatype::create([
            'metatype' => 'Ogre',
            'traits_label' => 'metatype.traits.ogre',
            'traits_id' => $i++,
            'special_points' => '7,4,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['ork'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 8,
        ]);

        $oni = Metatype::create([
            'metatype' => 'Oni',
            'traits_label' => 'metatype.traits.oni',
            'traits_id' => $i++,
            'special_points' => '7,4,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['ork'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 4,
        ]);

        $satyr = Metatype::create([
            'metatype' => 'Satyr',
            'traits_label' => 'metatype.traits.satyr',
            'traits_id' => $i++,
            'special_points' => '5,0,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['ork'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 10,
        ]);

        $cyclops = Metatype::create([
            'metatype' => 'Cyclops',
            'traits_label' => 'metatype.traits.cyclops',
            'traits_id' => $i++,
            'special_points' => '5,0,0,0,0',
            'priority_avail' => 'A,B',
            'metatype_parent' => Metatype::PARENT_METATYPE['troll'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 2,
        ]);

        $fomorian = Metatype::create([
            'metatype' => 'Fomorian',
            'traits_label' => 'metatype.traits.fomorian',
            'traits_id' => $i++,
            'special_points' => '5,0,0,0,0',
            'priority_avail' => 'A,B',
            'metatype_parent' => Metatype::PARENT_METATYPE['troll'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 12,
        ]);

        $giant = Metatype::create([
            'metatype' => 'Giant',
            'traits_label' => 'metatype.traits.giant',
            'traits_id' => $i++,
            'special_points' => '5,0,0,0,0',
            'priority_avail' => 'A,B',
            'metatype_parent' => Metatype::PARENT_METATYPE['troll'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 2,
        ]);

        $minotaur = Metatype::create([
            'metatype' => 'Minotaur',
            'traits_label' => 'metatype.traits.minotaur',
            'traits_id' => $i++,
            'special_points' => '5,0,0,0,0',
            'priority_avail' => 'A,B',
            'metatype_parent' => Metatype::PARENT_METATYPE['troll'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metavariants'],
            'attributes_id' => 0,
            'karma_cost' => 2,
        ]);

        /* ===== Metasapients ===== */

        $centaur = Metatype::create([
            'metatype' => 'Centaur',
            'traits_label' => 'metatype.traits.centaur',
            'traits_id' => $i++,
            'special_points' => '6,3,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metasapient_races'],
            'attributes_id' => 0,
            'karma_cost' => 25,
        ]);

        $naga = Metatype::create([
            'metatype' => 'Naga',
            'traits_label' => 'metatype.traits.naga',
            'traits_id' => $i++,
            'special_points' => '4,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metasapient_races'],
            'attributes_id' => 0,
            'karma_cost' => 25,
        ]);

        $pixie = Metatype::create([
            'metatype' => 'Pixie',
            'traits_label' => 'metatype.traits.pixie',
            'traits_id' => $i++,
            'special_points' => '6,3,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metasapient_races'],
            'attributes_id' => 0,
            'karma_cost' => 15,
        ]);

        $sasquatch = Metatype::create([
            'metatype' => 'Sasquatch',
            'traits_label' => 'metatype.traits.sasquatch',
            'traits_id' => $i++,
            'special_points' => '5,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['metasapient_races'],
            'attributes_id' => 0,
            'karma_cost' => 20,
        ]);

        /* ===== Shapeshifter ===== */

        $bovine_shapeshifter = Metatype::create([
            'metatype' => 'Bovine Shapeshifter',
            'traits_label' => 'metatype.traits.bovine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '8,6,4,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 5,
        ]);

        $canine_shapeshifter = Metatype::create([
            'metatype' => 'Canine Shapeshifter',
            'traits_label' => 'metatype.traits.canine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '7,5,3,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 10,
        ]);

        $equine_shapeshifter = Metatype::create([
            'metatype' => 'Equine Shapeshifter',
            'traits_label' => 'metatype.traits.equine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '6,4,2,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 15,
        ]);

        $falconine_shapeshifter = Metatype::create([
            'metatype' => 'Falconine Shapeshifter',
            'traits_label' => 'metatype.traits.falconine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '7,5,3,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 10,
        ]);

        $leonine_shapeshifter = Metatype::create([
            'metatype' => 'Leonine Shapeshifter',
            'traits_label' => 'metatype.traits.leonine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '4,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 20,
        ]);

        $lupine_shapeshifter = Metatype::create([
            'metatype' => 'Lupine Shapeshifter',
            'traits_label' => 'metatype.traits.lupine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '6,4,2,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 15,
        ]);

        $pantherine_shapeshifter = Metatype::create([
            'metatype' => 'Pantherine Shapeshifter',
            'traits_label' => 'metatype.traits.pantherine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '4,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 25,
        ]);

        $tigrine_shapeshifter = Metatype::create([
            'metatype' => 'Tigrine Shapeshifter',
            'traits_label' => 'metatype.traits.tigrine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '4,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 25,
        ]);

        $ursine_shapeshifter = Metatype::create([
            'metatype' => 'Ursine Shapeshifter',
            'traits_label' => 'metatype.traits.ursine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '4,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 20,
        ]);

        $vulpine_shapeshifter = Metatype::create([
            'metatype' => 'Vulpine Shapeshifter',
            'traits_label' => 'metatype.traits.vulpine_shapeshifter',
            'traits_id' => $i++,
            'special_points' => '8,6,4,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['shapeshifter'],
            'attributes_id' => 0,
            'karma_cost' => 5,
        ]);

        /* ===== AI Races ===== */

        $metasapient_ai = Metatype::create([
            'metatype' => 'Metasapient ai',
            'traits_label' => 'metatype.traits.metasapient_ai',
            'traits_id' => $i,
            'special_points' => '4,2,0,0,0',
            'priority_avail' => 'A,B,C',
            'metatype_parent' => Metatype::PARENT_METATYPE['none'],
            'metatype_category' => Metatype::METATYPE_CATEGORY['ai_races'],
            'attributes_id' => 0,
            'karma_cost' => 0,
        ]);
    }
}
