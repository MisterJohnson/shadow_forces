import helper from './../helpers/priority_helper'

const TYPE_UPDATED = (state, type) => {
    state.typeId = type.id;
};

export default {
    TYPE_UPDATED
};
