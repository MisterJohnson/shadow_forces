import magic_state from "./magic/index";
import metatype_state from "./metatype/index";
import attributes_state from "./attributes/index";
import priority_state from "./priority/index";
import skill_state from "./skill/index";
import errors_state from "./errors/index";

import actions from "./actions";
import getters from "./getters";
import mutations from "./mutations";

let state = {
    magics: magic_state.state.magics,
    magicId: magic_state.state.magicId,

    skills: skill_state.state.skills,
    skill_array: skill_state.state.skill_array,
    available_skill_points: skill_state.state.available_skill_points,

    types: metatype_state.state.types,
    typeId: metatype_state.state.typeId,
    special_points: metatype_state.state.special_points,

    metatypes_attributes: attributes_state.state.metatypes_attributes,
    metatype_attributes: attributes_state.state.metatype_attributes,
    current_attr: attributes_state.state.current_attr,
    available_point: attributes_state.state.available_point,

    default_ranking: priority_state.state.default_ranking,
    selectors: priority_state.state.selectors,

    errors: errors_state.state.errors,
    error: errors_state.state.error,
    toasted: errors_state.state.toasted
};

export default {
    namespaced: true,
    state,
    actions,
    getters,
    mutations,
};
