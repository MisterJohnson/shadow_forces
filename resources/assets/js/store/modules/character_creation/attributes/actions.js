const actions = {
    updateData: ({commit}, payload) => {
        commit('SET_DATA', payload);
        commit('ATTRIBUTES_SET_ATTRIBUTES', {attributes: default_attributes[getRanking(payload.selector.ranking)], special: payload.special_points})
    }
};

const default_attributes = [
    24, 20, 16, 14, 12
];

const getRanking = (ranking) => {
    let index = 0;
    switch (ranking) {
        case 'A':
            index = 0;
            break;
        case 'B':
            index = 1;
            break;
        case 'C':
            index = 2;
            break;
        case 'D':
            index = 3;
            break;
        case 'E':
            index = 4;
            break;
    }
    return index;
};

export default actions;
