import getters from './getters';
import mutations from './mutations';
import actions from './actions';

let state = {
    default_ranking: [
        'A', 'B', 'C', 'D', 'E'
    ],
};

export default {
    namespaced: true,
    state,
    actions,
    getters,
    mutations,
};
