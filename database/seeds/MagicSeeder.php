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
            'label' => 'Adept',
            'description' => 'Adept are kind of physical mages, they cannot project astrally and other stuff.',
            'is_resonance' => false,
        ]);

        $adept2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 1,
            'skill_rating' => 2,
            'number_free_spell' => 0,
            'label' => 'Adept',
            'description' => 'Adept are kind of physical mages, they cannot project astrally and other stuff.',
            'is_resonance' => false,
        ]);

        $adept3 = Magic::create([
            'magic_attribute' => 2,
            'magic_attribute_grade' => Attributes::D,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 0,
            'label' => 'Adept',
            'description' => 'Adept are kind of physical mages, they cannot project astrally and other stuff.',
            'is_resonance' => false,
        ]);

        $mage1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::A,
            'number_of_skills' => 2,
            'skill_rating' => 5,
            'number_free_spell' => 10,
            'label' => 'Magician',
            'description' => 'Magician are expert in astral knowledge, they are the only one who can project. They can fling spell, summon spirit.',
            'is_resonance' => false,
        ]);

        $mage2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 2,
            'skill_rating' => 4,
            'number_free_spell' => 7,
            'label' => 'Magician',
            'description' => 'Magician are expert in astral knowledge, they are the only one who can project. They can fling spell, summon spirit.',
            'is_resonance' => false,
        ]);

        $mage3 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 5,
            'label' => 'Magician',
            'description' => 'Magician are expert in astral knowledge, they are the only one who can project. They can fling spell, summon spirit.',
            'is_resonance' => false,
        ]);

        $mystic1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::A,
            'number_of_skills' => 2,
            'skill_rating' => 5,
            'number_free_spell' => 10,
            'label' => 'Mystic Adept',
            'description' => 'The army swiss knife, he can do pretty much everything an adept & a mage can do, but they are karma expensive and they also can\'t project or see astrally.',
            'is_resonance' => false,
        ]);

        $mystic2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 2,
            'skill_rating' => 4,
            'number_free_spell' => 7,
            'label' => 'Mystic Adept',
            'description' => 'The army swiss knife, he can do pretty much everything an adept & a mage can do, but they are karma expensive and they also can\'t project or see astrally.',
            'is_resonance' => false,
        ]);

        $mystic3 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 5,
            'label' => 'Mystic Adept',
            'description' => 'The army swiss knife, he can do pretty much everything an adept & a mage can do, but they are karma expensive and they also can\'t project or see astrally.',
            'is_resonance' => false,
        ]);

        $techno1 = Magic::create([
            'magic_attribute' => 6,
            'magic_attribute_grade' => Attributes::A,
            'number_of_skills' => 3,
            'skill_rating' => 5,
            'number_free_spell' => 7,
            'label' => 'Resonance',
            'description' => 'Technomancers are metahumans who have expressed the ability to affect computers directly, without terminals or intermediate devices of their own, as an act of will. There are many parallels between a Technomancer\'s ability and magical ability expressed by the Awakened; much as Awakened mages summon spirits and cast spells, Technomancers compile Sprites and execute Complex Forms. Despite these similarities, a Technomancer\'s ability is not compatible with other forms of Awakening, if it is indeed related to magic in any way (at current unknown).',
            'is_resonance' => true,
        ]);

        $techno2 = Magic::create([
            'magic_attribute' => 4,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 3,
            'skill_rating' => 4,
            'number_free_spell' => 5,
            'label' => 'Resonance',
            'description' => 'Technomancers are metahumans who have expressed the ability to affect computers directly, without terminals or intermediate devices of their own, as an act of will. There are many parallels between a Technomancer\'s ability and magical ability expressed by the Awakened; much as Awakened mages summon spirits and cast spells, Technomancers compile Sprites and execute Complex Forms. Despite these similarities, a Technomancer\'s ability is not compatible with other forms of Awakening, if it is indeed related to magic in any way (at current unknown).',
            'is_resonance' => true,
        ]);

        $techno3 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 3,
            'skill_rating' => 2,
            'number_free_spell' => 3,
            'label' => 'Resonance',
            'description' => 'Technomancers are metahumans who have expressed the ability to affect computers directly, without terminals or intermediate devices of their own, as an act of will. There are many parallels between a Technomancer\'s ability and magical ability expressed by the Awakened; much as Awakened mages summon spirits and cast spells, Technomancers compile Sprites and execute Complex Forms. Despite these similarities, a Technomancer\'s ability is not compatible with other forms of Awakening, if it is indeed related to magic in any way (at current unknown).',
            'is_resonance' => true,
        ]);

        $aspected1 = Magic::create([
            'magic_attribute' => 5,
            'magic_attribute_grade' => Attributes::B,
            'number_of_skills' => 3,
            'skill_rating' => 4,
            'number_free_spell' => 8,
            'label' => 'Aspected Magician',
            'description' => 'Aspected magicians are a limited form of magician.
Aspected magicians do not astrally project.
Aspected magicians can astrally perceive.
Aspected magicians must choose one, and only one, of the following three Skills/Skill Groups.
Sorcery (Spellcasting and related skills)
Conjuring (Summoning and related skills)
Enchanting (Alchemy and related skills)
Aspected magicians cannot perform any of the magical skills associated with the two groups they did not select.
Aspected magicians can only learn Counterspelling if they take the skills to be a spellcaster.
Aspected magicians can follow mentor spirits.
At character creation, aspected magicians who cast spells, perform rituals, or create alchemical preparations may know a maximum number of formulae from each group equal to their Magic Rating x 2 (i.e., Magic Rating of 4 allows 8 spells, 8 rituals, 8 alchemical preparations).
',
            'is_resonance' => false,
        ]);

        $aspected2 = Magic::create([
            'magic_attribute' => 3,
            'magic_attribute_grade' => Attributes::C,
            'number_of_skills' => 3,
            'skill_rating' => 2,
            'number_free_spell' => 6,
            'label' => 'Aspected Magician',
            'description' => 'Aspected magicians are a limited form of magician.
Aspected magicians do not astrally project.
Aspected magicians can astrally perceive.
Aspected magicians must choose one, and only one, of the following three Skills/Skill Groups.
Sorcery (Spellcasting and related skills)
Conjuring (Summoning and related skills)
Enchanting (Alchemy and related skills)
Aspected magicians cannot perform any of the magical skills associated with the two groups they did not select.
Aspected magicians can only learn Counterspelling if they take the skills to be a spellcaster.
Aspected magicians can follow mentor spirits.
At character creation, aspected magicians who cast spells, perform rituals, or create alchemical preparations may know a maximum number of formulae from each group equal to their Magic Rating x 2 (i.e., Magic Rating of 4 allows 8 spells, 8 rituals, 8 alchemical preparations).
',
            'is_resonance' => false,
        ]);

        $aspected3 = Magic::create([
            'magic_attribute' => 2,
            'magic_attribute_grade' => Attributes::D,
            'number_of_skills' => 0,
            'skill_rating' => 0,
            'number_free_spell' => 4,
            'label' => 'Aspected Magician',
            'description' => 'Aspected magicians are a limited form of magician.
Aspected magicians do not astrally project.
Aspected magicians can astrally perceive.
Aspected magicians must choose one, and only one, of the following three Skills/Skill Groups.
Sorcery (Spellcasting and related skills)
Conjuring (Summoning and related skills)
Enchanting (Alchemy and related skills)
Aspected magicians cannot perform any of the magical skills associated with the two groups they did not select.
Aspected magicians can only learn Counterspelling if they take the skills to be a spellcaster.
Aspected magicians can follow mentor spirits.
At character creation, aspected magicians who cast spells, perform rituals, or create alchemical preparations may know a maximum number of formulae from each group equal to their Magic Rating x 2 (i.e., Magic Rating of 4 allows 8 spells, 8 rituals, 8 alchemical preparations).
',
            'is_resonance' => false,
        ]);
    }
}
