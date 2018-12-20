import helper  from '../helpers/priority_helper'

const UPDATE_PRIORITIES = (state, payload) => {
    state.selectors = payload;
    helper.UPDATE_DATA(state, payload);
    for(let i=0; i < state.selectors.length; i++) {
        state.selectors[i].ranking = helper.getRankingFromOrder(i);
        if(state.selectors[i].type === 'Magic') {

        }
    }
};

const UPDATE_ID = (state, payload) => {
    state.magicId = payload;
};

export default {
    UPDATE_PRIORITIES,
    UPDATE_ID
}
