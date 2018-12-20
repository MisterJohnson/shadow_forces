const SET_CURRENT_METATYPE_ATTRIBUTES = (state, id) => {
    for(let i=0; i< state.metatypes_attributes.length; i++) {
        if(state.metatypes_attributes[i].id === id) {
            let currentAttrArray = set_character_attr_diff(state);
            state.metatype_attributes = state.metatypes_attributes[i];
            state.current_attr = set_character_main_attributes(state, currentAttrArray);
        }
    }
};

const UPDATE_DATA = (state, payload) => {
    SET_ATTRIBUTES(state, payload);
    SET_DATA(state, payload);
};

const SET_ATTRIBUTES = (state, payload) => {
    state.available_point.attributes = payload.attributes;
    state.available_point.special = payload.special;
};

const SET_DATA = (state, payload) => {
    state.available_point.special = payload.special_points;
    state.available_point.remaining_special = payload.special_points;
};

const INCREMENT_ATTRIBUTE = (state, payload) => {
    let attribute_name = payload.name;
    let increment = payload.increment;
    select_increment(state, attribute_name, increment);
};

const default_attributes = [
    24, 20, 16, 14, 12
];

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

function set_character_main_attributes(state, attr_array) {
    let current_attr = {
        body: state.metatype_attributes.body_min + attr_array.body,
        agility: state.metatype_attributes.agility_min + attr_array.agility,
        reaction: state.metatype_attributes.reaction_min + attr_array.reaction,
        strength: state.metatype_attributes.strength_min + attr_array.strength,
        willpower: state.metatype_attributes.willpower_min + attr_array.willpower,
        logic: state.metatype_attributes.logic_min + attr_array.logic,
        intuition: state.metatype_attributes.intuition_min + attr_array.intuition,
        charisma: state.metatype_attributes.charisma_min + attr_array.charisma,
        edge: state.metatype_attributes.edge_min + attr_array.edge,
        magic: state.metatype_attributes.magic + attr_array.magic,
    };
    return current_attr;
}

function set_character_attr_diff(state) {
    let current_attr = {
        body: (state.current_attr.body - state.metatype_attributes.body_min),
        agility: (state.current_attr.agility - state.metatype_attributes.agility_min),
        reaction: (state.current_attr.reaction - state.metatype_attributes.reaction_min),
        strength: (state.current_attr.strength - state.metatype_attributes.strength_min),
        willpower: (state.current_attr.willpower - state.metatype_attributes.willpower_min),
        logic: (state.current_attr.logic - state.metatype_attributes.logic_min),
        intuition: (state.current_attr.intuition - state.metatype_attributes.intuition_min),
        charisma: (state.current_attr.charisma - state.metatype_attributes.charisma_min),
        edge: (state.current_attr.edge - state.metatype_attributes.edge_min),
        magic: (state.current_attr.magic - state.metatype_attributes.magic),
    };
    return current_attr;
}

function select_increment(state, attribute_name, increment) {
    switch(attribute_name) {
        case 'body' :
            if(state.current_attr.body <= state.metatype_attributes.body_max
                && state.current_attr.body >= state.metatype_attributes.body_min) {
                state.current_attr.body = addIncrement(state, state.current_attr.body, increment, state.metatype_attributes.body_min, state.metatype_attributes.body_max);
            }
            break;
        case 'agility' :
            if(state.current_attr.agility <= state.metatype_attributes.agility_max
                && state.current_attr.agility >= state.metatype_attributes.agility_min) {
                state.current_attr.agility = addIncrement(state, state.current_attr.agility, increment, state.metatype_attributes.agility_min, state.metatype_attributes.agility_max);
            }
            break;
        case 'reaction' :
            if(state.current_attr.reaction <= state.metatype_attributes.reaction_max
                && state.current_attr.reaction >= state.metatype_attributes.reaction_min) {
                state.current_attr.reaction = addIncrement(state, state.current_attr.reaction, increment, state.metatype_attributes.reaction_min, state.metatype_attributes.reaction_max);
            }
            break;
        case 'strength' :
            if(state.current_attr.strength <= state.metatype_attributes.strength_max
                && state.current_attr.strength >= state.metatype_attributes.strength_min) {
                state.current_attr.strength = addIncrement(state, state.current_attr.strength, increment, state.metatype_attributes.strength_min, state.metatype_attributes.strength_max);
            }
            break;
        case 'willpower' :
            if(state.current_attr.willpower <= state.metatype_attributes.willpower_max
                && state.current_attr.willpower >= state.metatype_attributes.willpower_min) {
                state.current_attr.willpower = addIncrement(state, state.current_attr.willpower, increment, state.metatype_attributes.willpower_min, state.metatype_attributes.willpower_max);
            }
            break;
        case 'logic' :
            if(state.current_attr.logic <= state.metatype_attributes.logic_max
                && state.current_attr.logic >= state.metatype_attributes.logic_min) {
                state.current_attr.logic = addIncrement(state, state.current_attr.logic, increment, state.metatype_attributes.logic_min, state.metatype_attributes.logic_max);
            }
            break;
        case 'intuition' :
            if(state.current_attr.intuition <= state.metatype_attributes.intuition_max
                && state.current_attr.intuition >= state.metatype_attributes.intuition_min) {
                state.current_attr.intuition = addIncrement(state, state.current_attr.intuition, increment, state.metatype_attributes.intuition_min, state.metatype_attributes.intuition_max);
            }
            break;
        case 'charisma' :
            if(state.current_attr.charisma <= state.metatype_attributes.charisma_max
                && state.current_attr.charisma >= state.metatype_attributes.charisma_min) {
                state.current_attr.charisma = addIncrement(state, state.current_attr.charisma, increment, state.metatype_attributes.charisma_min, state.metatype_attributes.charisma_max);
            }
            break;
        case 'edge' :
            if(state.current_attr.edge <= state.metatype_attributes.edge_max
                && state.current_attr.edge >= state.metatype_attributes.edge_min) {
                state.current_attr.edge = addIncrement(state, state.current_attr.edge, increment, state.metatype_attributes.edge_min, state.metatype_attributes.edge_max, true);
            }
            break;
        case 'magic' :
            if(state.current_attr.magic <= 12
                && state.current_attr.magic >= 0) {
                state.current_attr.magic = addIncrement(state, state.current_attr.magic, increment, 0, 12, true);
            }
            break;
        default:
            break
    }
}

function addIncrement(state, attribute, increment, min, max, exception = false) {
    if(increment === 'minus') {
        if(attribute !== min) {
            attribute = attribute-1;
            if(!exception) {
                state.available_point.used_attributes = state.available_point.used_attributes-1
            } else {
                state.available_point.used_special = state.available_point.used_special-1
            }
        }
    } else {
        if(attribute !== max) {
            attribute = attribute+1;
            if(!exception) {
                state.available_point.used_attributes = state.available_point.used_attributes+1
            } else {
                state.available_point.used_special = state.available_point.used_special+1
            }
        }
    }
    return attribute;
}

export default {
    SET_CURRENT_METATYPE_ATTRIBUTES,
    INCREMENT_ATTRIBUTE,
    SET_ATTRIBUTES,
    SET_DATA
};
