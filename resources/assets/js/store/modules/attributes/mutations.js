const SET_CURRENT_METATYPE_ATTRIBUTES = (state, id) => {
    for(let i=0; i< state.metatypes_attributes.length; i++) {
        if(state.metatypes_attributes[i].id === id) {
            state.metatype_attributes = state.metatypes_attributes[i];
        }
    }
};


export default {
    SET_CURRENT_METATYPE_ATTRIBUTES
};
