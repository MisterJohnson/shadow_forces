import helper from "../helpers/priority_helper";

const types = state => state.types;
const type = (state) => (id) => {
    return state.types.find(type => type.id === id);
};
const typeId = state => state.typeId;
const special_points = state => {
    let ranking = helper.getRanking(helper.selectorArray.metatypeSelector.ranking);
    let type = state.types.find(type => type.id === state.typeId);
    return type.special_points.split(',')[ranking];
};
const filtered_types = state => {
    let filtered_metatype = [];
    if (state.types.length > 0) {
        let ranking = helper.selectorArray.metatypeSelector.ranking;
        for (let i = 0; i < state.types.length; i++) {
            if (state.types[i].priority_avail.includes(ranking)) {
                filtered_metatype.push(state.types[i]);
            }
        }
    }
    return filtered_metatype;
};

export default {
    types,
    type,
    typeId,
    special_points,
    filtered_types
};
