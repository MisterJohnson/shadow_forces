import magic_getters from './magic/getters';
import skill_getters  from './skill/getters';
import metatype_getters from './metatype/getters';
import attributes_getters from './attributes/getters';
import priority_getters from './priority/getters';
import error_getters from './errors/getters';


export default {
    magics : magic_getters.magics,
    magic : magic_getters.magic,
    magicId : magic_getters.magicId,

    skills: skill_getters.skills,
    remaining_skill_points: skill_getters.remaining_skill_points,
    remaining_skill_group_points: skill_getters.remaining_skill_group_points,
    get_group_from_skill: skill_getters.get_group_from_skill,
    filter_skills: skill_getters.filter_skills,

    type : metatype_getters.type,
    typeId: metatype_getters.typeId,
    types : metatype_getters.types,
    special_points : metatype_getters.special_points,
    filtered_types : metatype_getters.filtered_types,

    metatypes_attributes : attributes_getters.metatypes_attributes,
    metatype_attributes : attributes_getters.metatype_attributes,
    current_attr : attributes_getters.current_attr,
    available_point : attributes_getters.available_point,
    remaining_point : attributes_getters.remaining_point,

    selectors : priority_getters.selectors,
    default_ranking : priority_getters.default_ranking,

    errors: error_getters.errors,
    error: error_getters.error,
};
