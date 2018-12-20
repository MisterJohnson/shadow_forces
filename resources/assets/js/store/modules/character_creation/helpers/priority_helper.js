const selectorArray = {
    metatypeSelector : { type: 'Metatype', ranking: 'A', id: 0, data: '', show: true },
    attributeSelector : { type: 'Attributes', ranking: 'B', id: 1, data: '', show: false },
    magicSelector : { type: 'Magic', ranking: 'C', id: 2, data: '', show: false },
    skillSelector : { type: 'Skills', ranking: 'D', id: 3, data: '', show: false },
    resourceSelector : { type: 'Resources', ranking: 'E', id: 4, data: '', show: false },
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

const getRankingFromOrder = (ranking) => {
    let index = '';
    switch (ranking) {
        case 0:
            index = 'A';
            break;
        case 1:
            index = 'B';
            break;
        case 2:
            index = 'C';
            break;
        case 3:
            index = 'D';
            break;
        case 4:
            index = 'E';
            break;
    }
    return index;
};

const UPDATE_DATA = (state, payload) => {
    let selectors = selectorArray;
    for(let i = 0; i < state.selectors.length; i++) {
        state.selectors[i].ranking = getRankingFromOrder(i);
        if(state.selectors[i].type === 'Metatype') {
            selectors.metatypeSelector = state.selectors[i];
        }
        if(state.selectors[i].type === 'Attributes') {
            selectors.attributeSelector = state.selectors[i];
        }
        if(state.selectors[i].type === 'Magic') {
            selectors.magicSelector = state.selectors[i];
        }
    }
};

export default {
    selectorArray,
    getRanking,
    default_attributes,
    getRankingFromOrder,
    UPDATE_DATA
};
