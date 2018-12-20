import helper  from '../helpers/priority_helper';
import errors from '../errors/mutations';
const SKILL_POINT = 0;
const SKILL_GROUP_POINT = 1;

const UPDATE_PRIORITIES = (state, payload) => {
    for(let i=0; i<state.selectors.length; i++) {
        state.selectors[i].ranking = helper.getRankingFromOrder(i);
        if(state.selectors[i].type === 'Skills') {
            state.available_skill_points.skill_points = state.skill_array[state.selectors[i].ranking][SKILL_POINT];
            state.available_skill_points.skill_group_points = state.skill_array[state.selectors[i].ranking][SKILL_GROUP_POINT];
            state.available_skill_points.remaining_skill_points = state.skill_array[state.selectors[i].ranking][SKILL_POINT];
            state.available_skill_points.remaining_skill_group_points = state.skill_array[state.selectors[i].ranking][SKILL_GROUP_POINT];
        }
    }
};

const ADD = (state, payload) => {
    if(state.skills[payload].skill_rating < 6) {
        state.skills[payload].skill_rating++;
    } else {
        state.skills[payload].skill_rating++;
        const err = {
            id : 0,
            name : 'Errors.Skill.overflow.error',
            code : 100,
            message : 'Please set the skill to 6 or lower at character creation.',
        };
        errors.ADD_AND_ALERT(state, err);
    }
    state.available_skill_points.used_skill_points++;
    if(state.available_skill_points.remaining_skill_points - state.available_skill_points.used_skill_points < 0){
        const err = {
            id : 1,
            name : 'Errors.Skill.no.skill.point',
            code : 100,
            message : 'You do not have any skill point left',
        };
        errors.ADD_AND_ALERT(state, err);
    }
};

const REMOVE = (state, id) => {
    if(state.skills[id].skill_rating > 0) {
        state.skills[id].skill_rating--;
        if(state.errors.length > 0) {
            errors.REMOVE_ERRORS(state, 0);
        }
        state.available_skill_points.used_skill_points--;
    }
    if(state.available_skill_points.remaining_skill_points - state.available_skill_points.used_skill_points >= 0){
        if(state.errors.length > 0) {
            errors.REMOVE_ERRORS(state, 1);
        }
    }
};

const ADD_GROUP = (state, payload) => {
    if(state.skills[payload].skill_rating < 6) {
        state.skills[payload].skill_rating++;
    } else {
        state.skills[payload].skill_rating++;
        const err = {
            id : 0,
            name : 'Errors.Skill.overflow.error',
            code : 100,
            message : 'Please set the skill group to 6 or lower at character creation.',
        };
        errors.ADD_AND_ALERT(state, err);
    }
    state.available_skill_points.used_skill_group_points++;

    if(state.available_skill_points.remaining_skill_group_points - state.available_skill_points.used_skill_group_points < 0){
        const err = {
            id : 2,
            name : 'Errors.Skill.no.skill.group.point',
            code : 100,
            message : 'You do not have any skill group points left',
        };
        errors.ADD_AND_ALERT(state, err);
    }
};

const REMOVE_GROUP = (state, id) => {
    if(state.skills[id].skill_rating > 0) {
        state.skills[id].skill_rating--;
        if(state.errors.length > 0) {
            errors.REMOVE_ERRORS(state, 0);
        }
        state.available_skill_points.used_skill_group_points--;
        if(state.available_skill_points.remaining_skill_group_points - state.available_skill_points.used_skill_group_points >= 0){
            if(state.errors.length > 0) {
                errors.REMOVE_ERRORS(state, 2);
            }
        }
    }
};

export default {
    UPDATE_PRIORITIES,
    ADD,
    REMOVE,
    ADD_GROUP,
    REMOVE_GROUP
}
