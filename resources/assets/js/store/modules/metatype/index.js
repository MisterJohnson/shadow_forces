import getters from './getters';
import mutations from './mutations';

let state = {
    types: [
            {
                "id": 0,
                "metatype": "Human",
                "traits_label": "metatype.traits.none",
                "traits_id": 0,
                "special_points": "9,7,5,3,1",
                "description": "description.traits.none",
                "priority_avail": "A,B,C,D,E",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metatype",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:25",
                "updated_at": "2018-10-01 01:33:25"
            },
            {
                "id": 1,
                "metatype": "Elf",
                "traits_label": "metatype.traits.elf",
                "traits_id": 1,
                "special_points": "8,6,3,0,0",
                "description": "description.traits.elf",
                "priority_avail": "A,B,C,D",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metatype",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 2,
                "metatype": "Dwarf",
                "traits_label": "metatype.traits.dwarf",
                "traits_id": 2,
                "special_points": "7,4,1,0,0",
                "description": "description.traits.dwarf",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metatype",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 3,
                "metatype": "Ork",
                "traits_label": "metatype.traits.ork",
                "traits_id": 3,
                "special_points": "7,4,1,0,0",
                "description": "description.traits.ork",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metatype",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 4,
                "metatype": "Troll",
                "traits_label": "metatype.traits.troll",
                "traits_id": 4,
                "special_points": "5,0,0,0,0",
                "description": "description.traits.troll",
                "priority_avail": "A,B",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metatype",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 5,
                "metatype": "Nartaki",
                "traits_label": "metatype.traits.nartaki",
                "traits_id": 5,
                "special_points": "9,7,5,3,1",
                "description": "description.traits.nartaki",
                "priority_avail": "A,B,C,D,E",
                "metatype_parent": "metatype.human.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 6,
                "metatype": "Dryad",
                "traits_label": "metatype.traits.dryad",
                "traits_id": 6,
                "special_points": "8,6,3,0,0",
                "description": "description.traits.dryad",
                "priority_avail": "A,B,C,D",
                "metatype_parent": "metatype.elf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 7,
                "metatype": "Nocturna",
                "traits_label": "metatype.traits.nocturna",
                "traits_id": 7,
                "special_points": "8,6,3,0,0",
                "description": "description.traits.nocturna",
                "priority_avail": "A,B,C,D",
                "metatype_parent": "metatype.elf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 8,
                "metatype": "Wakyambi",
                "traits_label": "metatype.traits.wakyambi",
                "traits_id": 8,
                "special_points": "8,6,3,0,0",
                "description": "description.traits.wakyambi",
                "priority_avail": "A,B,C,D",
                "metatype_parent": "metatype.elf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 12,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 9,
                "metatype": "Xapiri Thëpë",
                "traits_label": "metatype.traits.xapiri_thepe",
                "traits_id": 9,
                "special_points": "8,6,3,0,0",
                "description": "description.traits.xapiri_thepe",
                "priority_avail": "A,B,C,D",
                "metatype_parent": "metatype.elf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 10,
                "metatype": "Gnome",
                "traits_label": "metatype.traits.gnome",
                "traits_id": 10,
                "special_points": "7,4,1,0,0",
                "description": "description.traits.gnome",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.dwarf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 7,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 11,
                "metatype": "Hanuman",
                "traits_label": "metatype.traits.hanuman",
                "traits_id": 11,
                "special_points": "7,4,1,0,0",
                "description": "description.traits.hanuman",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.dwarf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 5,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 12,
                "metatype": "Koborokuru",
                "traits_label": "metatype.traits.koborokuru",
                "traits_id": 12,
                "special_points": "7,4,1,0,0",
                "description": "description.traits.koborokuru",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.dwarf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 13,
                "metatype": "Menehune",
                "traits_label": "metatype.traits.menehune",
                "traits_id": 13,
                "special_points": "7,4,1,0,0",
                "description": "description.traits.menehune",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.dwarf.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 2,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 14,
                "metatype": "Hobgoblin",
                "traits_label": "metatype.traits.hobgoblin",
                "traits_id": 14,
                "special_points": "7,4,0,0,0",
                "description": "description.traits.hobgoblin",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.ork.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 5,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 15,
                "metatype": "Ogre",
                "traits_label": "metatype.traits.ogre",
                "traits_id": 15,
                "special_points": "7,4,0,0,0",
                "description": "description.traits.ogre",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.ork.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 8,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 16,
                "metatype": "Oni",
                "traits_label": "metatype.traits.oni",
                "traits_id": 16,
                "special_points": "7,4,0,0,0",
                "description": "description.traits.oni",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.ork.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 4,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 17,
                "metatype": "Satyr",
                "traits_label": "metatype.traits.satyr",
                "traits_id": 17,
                "special_points": "5,0,0,0,0",
                "description": "description.traits.satyr",
                "priority_avail": "A,B,C",
                "metatype_parent": "metatype.ork.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 10,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 18,
                "metatype": "Cyclops",
                "traits_label": "metatype.traits.cyclops",
                "traits_id": 18,
                "special_points": "5,0,0,0,0",
                "description": "description.traits.cyclops",
                "priority_avail": "A,B",
                "metatype_parent": "metatype.troll.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 2,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 19,
                "metatype": "Fomorian",
                "traits_label": "metatype.traits.fomorian",
                "traits_id": 19,
                "special_points": "5,0,0,0,0",
                "description": "description.traits.fomorian",
                "priority_avail": "A,B",
                "metatype_parent": "metatype.troll.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 12,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 20,
                "metatype": "Giant",
                "traits_label": "metatype.traits.giant",
                "traits_id": 20,
                "special_points": "5,0,0,0,0",
                "description": "description.traits.giant",
                "priority_avail": "A,B",
                "metatype_parent": "metatype.troll.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 2,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 21,
                "metatype": "Minotaur",
                "traits_label": "metatype.traits.minotaur",
                "traits_id": 21,
                "special_points": "5,0,0,0,0",
                "description": "description.traits.minotaur",
                "priority_avail": "A,B",
                "metatype_parent": "metatype.troll.title",
                "metatype_category": "metatype.title.metavariants",
                "attributes_id": 0,
                "karma_cost": 2,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 22,
                "metatype": "Centaur",
                "traits_label": "metatype.traits.centaur",
                "traits_id": 22,
                "special_points": "6,3,0,0,0",
                "description": "description.traits.centaur",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metasapient_races",
                "attributes_id": 0,
                "karma_cost": 25,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 23,
                "metatype": "Naga",
                "traits_label": "metatype.traits.naga",
                "traits_id": 23,
                "special_points": "4,2,0,0,0",
                "description": "description.traits.naga",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metasapient_races",
                "attributes_id": 0,
                "karma_cost": 25,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 24,
                "metatype": "Pixie",
                "traits_label": "metatype.traits.pixie",
                "traits_id": 24,
                "special_points": "6,3,0,0,0",
                "description": "description.traits.pixie",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metasapient_races",
                "attributes_id": 0,
                "karma_cost": 15,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 25,
                "metatype": "Sasquatch",
                "traits_label": "metatype.traits.sasquatch",
                "traits_id": 25,
                "special_points": "5,2,0,0,0",
                "description": "description.traits.sasquatch",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.metasapient_races",
                "attributes_id": 0,
                "karma_cost": 20,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 26,
                "metatype": "Bovine Shapeshifter",
                "traits_label": "metatype.traits.bovine_shapeshifter",
                "traits_id": 26,
                "special_points": "8,6,4,0,0",
                "description": "description.traits.bovine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 5,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 27,
                "metatype": "Canine Shapeshifter",
                "traits_label": "metatype.traits.canine_shapeshifter",
                "traits_id": 27,
                "special_points": "7,5,3,0,0",
                "description": "description.traits.canine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 10,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 28,
                "metatype": "Equine Shapeshifter",
                "traits_label": "metatype.traits.equine_shapeshifter",
                "traits_id": 28,
                "special_points": "6,4,2,0,0",
                "description": "description.traits.equine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 15,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 29,
                "metatype": "Falconine Shapeshifter",
                "traits_label": "metatype.traits.falconine_shapeshifter",
                "traits_id": 29,
                "special_points": "7,5,3,0,0",
                "description": "description.traits.falconine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 10,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 30,
                "metatype": "Leonine Shapeshifter",
                "traits_label": "metatype.traits.leonine_shapeshifter",
                "traits_id": 30,
                "special_points": "4,2,0,0,0",
                "description": "description.traits.leonine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 20,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 31,
                "metatype": "Lupine Shapeshifter",
                "traits_label": "metatype.traits.lupine_shapeshifter",
                "traits_id": 31,
                "special_points": "6,4,2,0,0",
                "description": "description.traits.lupine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 15,
                "created_at": "2018-10-01 01:33:26",
                "updated_at": "2018-10-01 01:33:26"
            },
            {
                "id": 32,
                "metatype": "Pantherine Shapeshifter",
                "traits_label": "metatype.traits.pantherine_shapeshifter",
                "traits_id": 32,
                "special_points": "4,2,0,0,0",
                "description": "description.traits.pantherine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 25,
                "created_at": "2018-10-01 01:33:27",
                "updated_at": "2018-10-01 01:33:27"
            },
            {
                "id": 33,
                "metatype": "Tigrine Shapeshifter",
                "traits_label": "metatype.traits.tigrine_shapeshifter",
                "traits_id": 33,
                "special_points": "4,2,0,0,0",
                "description": "description.traits.tigrine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 25,
                "created_at": "2018-10-01 01:33:27",
                "updated_at": "2018-10-01 01:33:27"
            },
            {
                "id": 34,
                "metatype": "Ursine Shapeshifter",
                "traits_label": "metatype.traits.ursine_shapeshifter",
                "traits_id": 34,
                "special_points": "4,2,0,0,0",
                "description": "description.traits.ursine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 20,
                "created_at": "2018-10-01 01:33:27",
                "updated_at": "2018-10-01 01:33:27"
            },
            {
                "id": 35,
                "metatype": "Vulpine Shapeshifter",
                "traits_label": "metatype.traits.vulpine_shapeshifter",
                "traits_id": 35,
                "special_points": "8,6,4,0,0",
                "description": "description.traits.vulpine_shapeshifter",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.shapeshifter",
                "attributes_id": 0,
                "karma_cost": 5,
                "created_at": "2018-10-01 01:33:27",
                "updated_at": "2018-10-01 01:33:27"
            },
            {
                "id": 36,
                "metatype": "Metasapient ai",
                "traits_label": "metatype.traits.metasapient_ai",
                "traits_id": 36,
                "special_points": "4,2,0,0,0",
                "description": "description.traits.metasapient_ai",
                "priority_avail": "A,B,C",
                "metatype_parent": "None",
                "metatype_category": "metatype.title.ai_races",
                "attributes_id": 0,
                "karma_cost": 0,
                "created_at": "2018-10-01 01:33:27",
                "updated_at": "2018-10-01 01:33:27"
            }
        ],
    type : {
        "id": 0,
        "metatype": "Human",
        "traits_label": "metatype.traits.none",
        "traits_id": 0,
        "special_points": "9,7,5,3,1",
        "description": "description.traits.none",
        "priority_avail": "A,B,C,D,E",
        "metatype_parent": "None",
        "metatype_category": "metatype.title.metatype",
        "attributes_id": 0,
        "karma_cost": 0,
        "created_at": "2018-10-01 01:33:25",
        "updated_at": "2018-10-01 01:33:25"
    }
};

export default {
    namespaced: true,
    state,
    //actions,
    getters,
    mutations,
};
