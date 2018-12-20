import metatype from "./metatype/mutations";
import skill from "./skill/mutations";
import attributes from "./attributes/mutations";
import priority from "./priority/mutations";
import magic from "./magic/mutations";
import errors from "./errors/mutations";
import helper from "./helpers/priority_helper";

export default {
    METATYPE_TYPE_UPDATED: metatype.TYPE_UPDATED,

    MAGIC_UPDATE_MAGICS: magic.UPDATE_PRIORITIES,
    MAGIC_UPDATE_ID: magic.UPDATE_ID,

    SKILL_ADD: skill.ADD,
    SKILL_REMOVE: skill.REMOVE,
    SKILL_GROUP_ADD: skill.ADD_GROUP,
    SKILL_GROUP_REMOVE: skill.REMOVE_GROUP,

    ATTRIBUTES_SET_CURRENT_METATYPE_ATTRIBUTES: attributes.SET_CURRENT_METATYPE_ATTRIBUTES,
    ATTRIBUTES_INCREMENT_ATTRIBUTE: attributes.INCREMENT_ATTRIBUTE,
    ATTRIBUTES_SET_ATTRIBUTES: attributes.SET_ATTRIBUTES,
    ATTRIBUTES_SET_DATA: attributes.SET_DATA,

    PRIORITY_UPDATE_PRIORITIES: priority.UPDATE_PRIORITIES,

    ADD_ERRORS: errors.ADD_ERRORS,
    ADD_AND_ALERT: errors.ADD_AND_ALERT,
    REMOVE_ERRORS: errors.REMOVE_ERRORS,

    UPDATE_DATA: (state, payload) => {
        let selectors = helper.selectorArray;
        for(let i = 0; i < state.selectors.length; i++) {
            state.selectors[i].ranking = state.default_ranking[i];
            if(state.selectors[i].type === 'Metatype') {
                selectors.metatypeSelector = state.selectors[i];
            }
            if(state.selectors[i].type === 'Attributes') {
                selectors.attributeSelector = state.selectors[i];
            }
            if(state.selectors[i].type === 'Magic') {
                selectors.magicSelector = state.selectors[i];
            }
            if(state.selectors[i].type === 'Skills') {
                selectors.skillSelector = state.selectors[i];
            }
        }
        skill.UPDATE_PRIORITIES(state, payload);
    },

    SET_TOASTED: (state, payload) => {
        state.toasted = payload;
    }
};
