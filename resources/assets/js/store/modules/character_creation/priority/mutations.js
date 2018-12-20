import helper  from '../helpers/priority_helper'

const UPDATE_PRIORITIES = (state, payload) => {
    state.selectors = payload;
    helper.UPDATE_DATA(state, payload);
    for(let i=0; i<state.selectors.length; i++) {
        state.selectors[i].ranking = helper.getRankingFromOrder(i);
        if(state.selectors[i].type === 'Attributes') {
            state.available_point.attributes = helper.default_attributes[i];
            state.available_point.remaining_attributes = helper.default_attributes[i];

            state.available_point.special = state.special_points;
            state.available_point.remaining_special = state.special_points;
        }
    }
};

export default {
    UPDATE_PRIORITIES
}
