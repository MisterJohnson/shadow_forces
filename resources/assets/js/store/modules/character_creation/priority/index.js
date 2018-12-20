let state = {
    default_ranking: [
        'A', 'B', 'C', 'D', 'E'
    ],
    selectors: [
        { type: 'Metatype', ranking: 'A', id: 0, data: '', show: true },
        { type: 'Attributes', ranking: 'B', id: 1, data: '', show: false },
        { type: 'Magic', ranking: 'C', id: 2, data: '', show: false },
        { type: 'Skills', ranking: 'D', id: 3, data: '', show: false },
        { type: 'Resources', ranking: 'E', id: 4, data: '', show: false },
    ],
};

export default {
    state,
};
