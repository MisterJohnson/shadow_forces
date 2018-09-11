<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-08-31
 * Time: 14:33
 */

use App\Attributes;
use App\Magic;
use Illuminate\Database\Seeder;

class MagicSeeder extends Seeder
{
    /**
     * Run the users database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adept1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 1,
            'skill_rating' => 4,
            'number_free_spell' => 0,
            'label' => 'label.adept.b',
            'description' => 'description.adept.b',
            'is_resonance' => false,
        ]);

        $adept2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 1,
            'skill_rating' => 2,
            'number_free_spell' => 0,
            'label' => 'label.adept.c',
            'description' => 'description.adept.c',
            'is_resonance' => false,
        ]);

        $adept3 = Magic::create([
            'magic_attribute' => 2,
            'magic_attribute_grade' => Attributes::D,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 0,
            'label' => 'label.adept.d',
            'description' => 'description.adept.d',
            'is_resonance' => false,
        ]);

        $mage1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::A,
            'number_of_skills' => 2,
            'skill_rating' => 5,
            'number_free_spell' => 10,
            'label' => 'label.magician.a',
            'description' => 'description.magician.a',
            'is_resonance' => false,
        ]);

        $mage2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 2,
            'skill_rating' => 4,
            'number_free_spell' => 7,
            'label' => 'label.magician.b',
            'description' => 'description.magician.b',
            'is_resonance' => false,
        ]);

        $mage3 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 5,
            'label' => 'label.magician.c',
            'description' => 'description.magician.c',
            'is_resonance' => false,
        ]);

        $mystic1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::A,
            'number_of_skills' => 2,
            'skill_rating' => 5,
            'number_free_spell' => 10,
            'label' => 'label.mys.a',
            'description' => 'description.mys.a',
            'is_resonance' => false,
        ]);

        $mystic2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 2,
            'skill_rating' => 4,
            'number_free_spell' => 7,
            'label' => 'label.mys.b',
            'description' => 'description.mys.b',
            'is_resonance' => false,
        ]);

        $mystic3 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 5,
            'label' => 'label.mys.c',
            'description' => 'description.mys.c',
            'is_resonance' => false,
        ]);

        $techno1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::A,
            'number_of_skills' => 3,
            'skill_rating' => 5,
            'number_free_spell' => 7,
            'label' => 'label.tech.a',
            'description' => 'description.tech.a',
            'is_resonance' => true,
        ]);

        $techno2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 3,
            'skill_rating' => 4,
            'number_free_spell' => 5,
            'label' => 'label.tech.b',
            'description' => 'description.tech.b',
            'is_resonance' => true,
        ]);

        $techno3 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 3,
            'skill_rating' => 2,
            'number_free_spell' => 3,
            'label' => 'label.tech.c',
            'description' => 'description.tech.c',
            'is_resonance' => true,
        ]);

        $aspected1 = Magic::create([
            'magic_attribute' => 5,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 3,
            'skill_rating' => 4,
            'number_free_spell' => 8,
            'label' => 'label.aspected.b',
            'description' => 'description.aspected.b',
            'is_resonance' => false,
        ]);

        $aspected2 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 3,
            'skill_rating' => 2,
            'number_free_spell' => 6,
            'label' => 'label.aspected.c',
            'description' => 'description.aspected.c',
            'is_resonance' => false,
        ]);

        $aspected3 = Magic::create([
            'magic_attribute' => 2,
            'magic_attribute_grade' => Attributes::D,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 4,
            'label' => 'label.aspected.d',
            'description' => 'description.aspected.d',
            'is_resonance' => false,
        ]);

        $apprentice1 = Magic::create([
            'magic_attribute' => 5,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 3,
            'skill_rating' => 4,
            'number_free_spell' => 8,
            'label' => 'label.apprentice.b',
            'description' => 'description.apprentice.b',
            'is_resonance' => false,
        ]);

        $apprentice2 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 3,
            'skill_rating' => 2,
            'number_free_spell' => 6,
            'label' => 'label.apprentice.c',
            'description' => 'description.apprentice.c',
            'is_resonance' => false,
        ]);

        $apprentice3 = Magic::create([
            'magic_attribute' => 2,
            'magic_attribute_grade' => Attributes::D,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 4,
            'label' => 'label.apprentice.d',
            'description' => 'description.apprentice.d',
            'is_resonance' => false,
        ]);

        $enchanter = Magic::create([
            'magic_attribute' => 5,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 3,
            'skill_rating' => 4,
            'number_free_spell' => 10,
            'label' => 'label.enchanter.c',
            'description' => 'description.enchanter.c',
            'is_resonance' => false,
        ]);

        $explorer = Magic::create([
            'magic_attribute' => 5,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 2,
            'skill_rating' => 5,
            'number_free_spell' => 0,
            'label' => 'label.explorer.c',
            'description' => 'description.explorer.c',
            'is_resonance' => false,
        ]);

        $aware = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::D,
            'number_of_skills' => 1,
            'skill_rating' => 4,
            'number_free_spell' => 0,
            'label' => 'label.aware.d',
            'description' => 'description.aware.d',
            'is_resonance' => false,
        ]);
    }
}
