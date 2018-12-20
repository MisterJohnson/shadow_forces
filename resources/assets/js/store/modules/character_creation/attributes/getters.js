const metatypes_attributes  = state => state.metatypes_attributes;
const metatype_attributes   = state => state.metatype_attributes;
const current_attr  = state => state.current_attr;
const available_point  = (state) => {
    return state.available_point;
};
const remaining_point  = (state) => {
    return {
        remaining_attributes: (state.available_point.attributes - state.available_point.used_attributes),
        remaining_special: (state.available_point.special - state.available_point.used_special)
    }
};

export default {
    metatypes_attributes,
    metatype_attributes,
    current_attr,
    available_point,
    remaining_point
};
