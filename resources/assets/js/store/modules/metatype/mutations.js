const TYPE_UPDATED = (state, type) => {
    state.type = type;
};

const FILTER_METATYPE = (state, ranking) => {
    if (state.types.length > 0) {
        let filtered_metatype = [];
        for (let i = 0; i < state.types.length; i++) {
            if (state.types[i].priority_avail.includes(ranking)) {
                filtered_metatype.push(state.types[i]);
            }
        }
        state.filtered_types = filtered_metatype;
    }
};

const UPDATE_DATA = (state, selector) => {
    if (state.types.length > 0) {
        if(state.type.id !== 99) {
            let ranking = getRanking(state, selector.ranking);
            state.special_points = state.type.special_points.split(',')[ranking];
        } else {
            state.special_points = 0;
        }
    } else {
        state.special_points = 0;
    }
};

const getRanking = (state, ranking) => {
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

export default {
    TYPE_UPDATED,
    UPDATE_DATA,
    FILTER_METATYPE
};
