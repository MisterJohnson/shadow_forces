<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-08-31
 * Time: 14:33
 */

use App\Skill;
use Illuminate\Database\Seeder;
use App\User;

class SkillsSeeder extends Seeder
{
    /**
     * Run the users database seeds.
     *
     * @return void
     */
    public function run()
    {
        $archery = Skill::create([ //1
            'skill_label' => 'label.archery',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.archery',
            'group_skills_id' => '',
        ]);

        $automatics = Skill::create([ //2
            'skill_label' => 'label.automatics',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.automatics',
            'group_skills_id' => '',
        ]);

        $longarms = Skill::create([ //3
            'skill_label' => 'label.longarms',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.longarms',
            'group_skills_id' => '',
        ]);

        $pistols = Skill::create([ //4
            'skill_label' => 'label.pistols',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.pistols',
            'group_skills_id' => '',
        ]);

        $firearms = Skill::create([ //5
            'skill_label' => 'label.firearms',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => true,
            'description' => 'description.firearms',
            'group_skills_id' => '2,3,4',
        ]);

        $blades = Skill::create([ //6
            'skill_label' => 'label.blades',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.blades',
            'group_skills_id' => '',
        ]);

        $clubs = Skill::create([ //7
            'skill_label' => 'label.clubs',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.clubs',
            'group_skills_id' => 0,
        ]);

        $unarmed = Skill::create([ //8
            'skill_label' => 'label.unarmed.combat',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.unarmed.combat',
            'group_skills_id' => 0,
        ]);

        $close_combat = Skill::create([ //9
            'skill_label' => 'label.close.combat',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => true,
            'description' => 'description.close.combat',
            'group_skills_id' => '6,7,8',
        ]);

        $exotic_melee = Skill::create([ //10
            'skill_label' => 'label.exotic.melee',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.exotic.melee',
            'group_skills_id' => '',
        ]);

        $exotic_ranged = Skill::create([ //11
            'skill_label' => 'label.exotic.ranged',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.exotic.ranged',
            'group_skills_id' => 0,
        ]);

        $heavy_weapon = Skill::create([ //12
            'skill_label' => 'label.heavy.weapon',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.heavy.weapon',
            'group_skills_id' => 0,
        ]);

        $throwing_weapon = Skill::create([ //13
            'skill_label' => 'label.throwing.weapon',
            'skill_type' => Skill::CATEGORY['combat'],
            'is_group' => false,
            'description' => 'description.throwing.weapon',
            'group_skills_id' => 0,
        ]);

        $gymnastic = Skill::create([ //14
            'skill_label' => 'label.gymnastic',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.gymnastic',
            'group_skills_id' => 0,
        ]);

        $running = Skill::create([ //15
            'skill_label' => 'label.running',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.running',
            'group_skills_id' => 0,
        ]);

        $swimming = Skill::create([ //16
            'skill_label' => 'label.swimming',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.swimming',
            'group_skills_id' => 0,
        ]);

        $athletics = Skill::create([ //17
            'skill_label' => 'label.athletics',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => true,
            'description' => 'description.athletics',
            'group_skills_id' => '14,15,16',
        ]);

        $navigation = Skill::create([ //18
            'skill_label' => 'label.navigation',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.navigation',
            'group_skills_id' => 0,
        ]);

        $survival = Skill::create([ //19
            'skill_label' => 'label.survival',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.survival',
            'group_skills_id' => 0,
        ]);

        $tracking = Skill::create([ //20
            'skill_label' => 'label.tracking',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.tracking',
            'group_skills_id' => 0,
        ]);

        $outdoors = Skill::create([ //21
            'skill_label' => 'label.outdoors',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => true,
            'description' => 'description.outdoors',
            'group_skills_id' => '18,19,20',
        ]);

        $disguise = Skill::create([ //22
            'skill_label' => 'label.disguise',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.disguise',
            'group_skills_id' => 0,
        ]);

        $palming = Skill::create([ //23
            'skill_label' => 'label.palming',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.palming',
            'group_skills_id' => 0,
        ]);

        $sneaking = Skill::create([ //24
            'skill_label' => 'label.sneaking',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.sneaking',
            'group_skills_id' => 0,
        ]);

        $stealth = Skill::create([ //25
            'skill_label' => 'label.stealth',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => true,
            'description' => 'description.stealth',
            'group_skills_id' => '22,23,24',
        ]);

        $diving = Skill::create([ //26
            'skill_label' => 'label.diving',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.diving',
            'group_skills_id' => 0,
        ]);

        $escape_artist = Skill::create([ //27
            'skill_label' => 'label.escape.artist',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.escape.artist',
            'group_skills_id' => 0,
        ]);

        $flight = Skill::create([ //28
            'skill_label' => 'label.flight',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.flight',
            'group_skills_id' => 0,
        ]);

        $free_fall = Skill::create([ //29
            'skill_label' => 'label.free.fall',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.free.fall',
            'group_skills_id' => 0,
        ]);

        $perception = Skill::create([ //30
            'skill_label' => 'label.perception',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.perception',
            'group_skills_id' => 0,
        ]);

        $perception = Skill::create([ //30
            'skill_label' => 'label.perception',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => false,
            'description' => 'description.perception',
            'group_skills_id' => 0,
        ]);

        $con = Skill::create([ //31
            'skill_label' => 'label.con',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.con',
            'group_skills_id' => 0,
        ]);

        $impersonation = Skill::create([ //32
            'skill_label' => 'label.impersonation',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.impersonation',
            'group_skills_id' => 0,
        ]);

        $performance = Skill::create([ //33
            'skill_label' => 'label.performance',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.performance',
            'group_skills_id' => 0,
        ]);

        $acting = Skill::create([ //34
            'skill_label' => 'label.acting',
            'skill_type' => Skill::CATEGORY['physical'],
            'is_group' => true,
            'description' => 'description.acting',
            'group_skills_id' => '31,32,33',
        ]);

        $etiquette = Skill::create([ //35
            'skill_label' => 'label.etiquette',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.etiquette',
            'group_skills_id' => 0,
        ]);

        $leadership = Skill::create([ //36
            'skill_label' => 'label.leadership',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.leadership',
            'group_skills_id' => 0,
        ]);

        $negociation = Skill::create([ //37
            'skill_label' => 'label.negociation',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.negociation',
            'group_skills_id' => 0,
        ]);

        $influence = Skill::create([ //38
            'skill_label' => 'label.influence',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => true,
            'description' => 'description.influence',
            'group_skills_id' => '35,36,37',
        ]);

        $instruction = Skill::create([ //39
            'skill_label' => 'label.instruction',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.instruction',
            'group_skills_id' => 0,
        ]);

        $intimidation = Skill::create([ //40
            'skill_label' => 'label.intimidation',
            'skill_type' => Skill::CATEGORY['social'],
            'is_group' => false,
            'description' => 'description.intimidation',
            'group_skills_id' => 0,
        ]);

        $banishing = Skill::create([ //41
            'skill_label' => 'label.banishing',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.banishing',
            'group_skills_id' => 0,
        ]);

        $binding = Skill::create([ //42
            'skill_label' => 'label.binding',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.binding',
            'group_skills_id' => 0,
        ]);

        $summoning = Skill::create([ //43
            'skill_label' => 'label.summoning',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.summoning',
            'group_skills_id' => 0,
        ]);

        $conjuring = Skill::create([ //44
            'skill_label' => 'label.conjuring',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => true,
            'description' => 'description.conjuring',
            'group_skills_id' => '41,42,43',
        ]);

        $alchemy = Skill::create([ //45
            'skill_label' => 'label.alchemy',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.alchemy',
            'group_skills_id' => 0,
        ]);

        $artificing = Skill::create([ //46
            'skill_label' => 'label.artificing',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.artificing',
            'group_skills_id' => 0,
        ]);

        $disenchanting = Skill::create([ //47
            'skill_label' => 'label.disenchanting',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.disenchanting',
            'group_skills_id' => 0,
        ]);

        $enchanting = Skill::create([ //48
            'skill_label' => 'label.enchanting',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => true,
            'description' => 'description.enchanting',
            'group_skills_id' => '45,46,47',
        ]);

        $counterspelling = Skill::create([ //49
            'skill_label' => 'label.counterspelling',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.counterspelling',
            'group_skills_id' => 0,
        ]);

        $ritual_spellcasting = Skill::create([ //50
            'skill_label' => 'label.ritual.spellcasting',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.ritual.spellcasting',
            'group_skills_id' => 0,
        ]);

        $spellcasting = Skill::create([ //51
            'skill_label' => 'label.spellcasting',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.spellcasting',
            'group_skills_id' => 0,
        ]);

        $sorcery = Skill::create([ //52
            'skill_label' => 'label.sorcery',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => true,
            'description' => 'description.sorcery',
            'group_skills_id' => '49,50,51',
        ]);

        $arcana = Skill::create([ //53
            'skill_label' => 'label.arcana',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.arcana',
            'group_skills_id' => 0,
        ]);

        $assensing = Skill::create([ //54
            'skill_label' => 'label.assensing',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.assensing',
            'group_skills_id' => 0,
        ]);

        $astral_combat = Skill::create([ //55
            'skill_label' => 'label.astral.combat',
            'skill_type' => Skill::CATEGORY['magical'],
            'is_group' => false,
            'description' => 'description.astral.combat',
            'group_skills_id' => 0,
        ]);

        $compiling = Skill::create([ //56
            'skill_label' => 'label.compiling',
            'skill_type' => Skill::CATEGORY['resonance'],
            'is_group' => false,
            'description' => 'description.compiling',
            'group_skills_id' => 0,
        ]);

        $decompiling = Skill::create([ //57
            'skill_label' => 'label.decompiling',
            'skill_type' => Skill::CATEGORY['resonance'],
            'is_group' => false,
            'description' => 'description.decompiling',
            'group_skills_id' => 0,
        ]);

        $registering = Skill::create([ //58
            'skill_label' => 'label.registering',
            'skill_type' => Skill::CATEGORY['resonance'],
            'is_group' => false,
            'description' => 'description.registering',
            'group_skills_id' => 0,
        ]);

        $tasking = Skill::create([ //59
            'skill_label' => 'label.tasking',
            'skill_type' => Skill::CATEGORY['resonance'],
            'is_group' => true,
            'description' => 'description.tasking',
            'group_skills_id' => '56,57,58',
        ]);

        $biotechnology = Skill::create([ //60
            'skill_label' => 'label.biotechnology',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.biotechnology',
            'group_skills_id' => 0,
        ]);

        $cybertechnology = Skill::create([ //61
            'skill_label' => 'label.cybertechnology',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.cybertechnology',
            'group_skills_id' => 0,
        ]);

        $first_aid = Skill::create([ //62
            'skill_label' => 'label.first.aid',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.first.aid',
            'group_skills_id' => 0,
        ]);

        $medicine = Skill::create([ //63
            'skill_label' => 'label.medicine',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.medicine',
            'group_skills_id' => 0,
        ]);

        $biotech = Skill::create([ //64
            'skill_label' => 'label.biotech',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => true,
            'description' => 'description.biotech',
            'group_skills_id' => '60,61,62,63',
        ]);

        $cybercombat = Skill::create([ //65
            'skill_label' => 'label.cybercombat',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.cybercombat',
            'group_skills_id' => 0,
        ]);

        $electronic_warfare = Skill::create([ //66
            'skill_label' => 'label.electronic.warfare',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.electronic.warfare',
            'group_skills_id' => 0,
        ]);

        $hacking = Skill::create([ //67
            'skill_label' => 'label.hacking',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.hacking',
            'group_skills_id' => 0,
        ]);

        $cracking = Skill::create([ //68
            'skill_label' => 'label.cracking',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => true,
            'description' => 'description.cracking',
            'group_skills_id' => '65,66,67',
        ]);

        $computer = Skill::create([ //69
            'skill_label' => 'label.computer',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.computer',
            'group_skills_id' => 0,
        ]);

        $hardware = Skill::create([ //70
            'skill_label' => 'label.hardware',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.hardware',
            'group_skills_id' => 0,
        ]);

        $software = Skill::create([ //71
            'skill_label' => 'label.software',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.software',
            'group_skills_id' => 0,
        ]);

        $electronics = Skill::create([ //72
            'skill_label' => 'label.electronics',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => true,
            'description' => 'description.electronics',
            'group_skills_id' => '69,70,71',
        ]);

        $aeronautics_mechanic = Skill::create([ //73
            'skill_label' => 'label.aeronautics.mechanic',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.aeronautics.mechanic',
            'group_skills_id' => 0,
        ]);

        $automotive_mechanic = Skill::create([ //74
            'skill_label' => 'label.automotive.mechanic',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.automotive.mechanic',
            'group_skills_id' => 0,
        ]);

        $industrial_mechanic = Skill::create([ //75
            'skill_label' => 'label.industrial.mechanic',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.industrial.mechanic',
            'group_skills_id' => 0,
        ]);

        $nautical_mechanic = Skill::create([ //76
            'skill_label' => 'label.nautical.mechanic',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.nautical.mechanic',
            'group_skills_id' => 0,
        ]);

        $engineering = Skill::create([ //77
            'skill_label' => 'label.engineering',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => true,
            'description' => 'description.engineering',
            'group_skills_id' => '73,74,75,76',
        ]);

        $animal_handling = Skill::create([ //78
            'skill_label' => 'label.animal.handling',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.animal.handling',
            'group_skills_id' => '',
        ]);

        $armorer = Skill::create([ //79
            'skill_label' => 'label.armorer',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.armorer',
            'group_skills_id' => '',
        ]);

        $artisan = Skill::create([ //80
            'skill_label' => 'label.artisan',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.artisan',
            'group_skills_id' => '',
        ]);

        $chemistry = Skill::create([ //81
            'skill_label' => 'label.chemistry',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.chemistry',
            'group_skills_id' => '',
        ]);

        $demolitions = Skill::create([ //82
            'skill_label' => 'label.demolitions',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.demolitions',
            'group_skills_id' => '',
        ]);

        $forgery = Skill::create([ //83
            'skill_label' => 'label.forgery',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.forgery',
            'group_skills_id' => '',
        ]);

        $forgery = Skill::create([ //84
            'skill_label' => 'label.forgery',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.forgery',
            'group_skills_id' => '',
        ]);

        $locksmith = Skill::create([ //85
            'skill_label' => 'label.locksmith',
            'skill_type' => Skill::CATEGORY['technical'],
            'is_group' => false,
            'description' => 'description.locksmith',
            'group_skills_id' => '',
        ]);

        $gunnery = Skill::create([ //86
            'skill_label' => 'label.gunnery',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.gunnery',
            'group_skills_id' => '',
        ]);

        $pilot_aerospace = Skill::create([ //87
            'skill_label' => 'label.pilot.aerospace',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.pilot.aerospace',
            'group_skills_id' => '',
        ]);

        $pilot_aircraft = Skill::create([ //88
            'skill_label' => 'label.pilot.aircraft',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.pilot.aircraft',
            'group_skills_id' => '',
        ]);

        $pilot_exotic_vehicle = Skill::create([ //89
            'skill_label' => 'label.pilot.exotic.vehicle',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.pilot.exotic.vehicle',
            'group_skills_id' => '',
        ]);

        $pilot_groundcraft = Skill::create([ //90
            'skill_label' => 'label.pilot.groundcraft',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.pilot.groundcraft',
            'group_skills_id' => '',
        ]);

        $pilot_walker = Skill::create([ //91
            'skill_label' => 'label.pilot.walker',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.pilot.walker',
            'group_skills_id' => '',
        ]);

        $pilot_watercraft = Skill::create([ //92
            'skill_label' => 'label.pilot.watercraft',
            'skill_type' => Skill::CATEGORY['vehicle'],
            'is_group' => false,
            'description' => 'description.pilot.watercraft',
            'group_skills_id' => '',
        ]);
    }
}
