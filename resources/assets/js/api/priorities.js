/**
 * Mocking client-server processing
 */
const _priorities = [
    { id: 0, ranking: 'A', type: 'Metatype' },
    { id: 1, ranking: 'B', type: 'Attributes' },
    { id: 2, ranking: 'C', type: 'Magic' },
    { id: 3, ranking: 'D', type: 'Skills' },
    { id: 4, ranking: 'E', type: 'Resources' },
];

const _races = [
        { id: 0, metatype: 'Human', special_attributes_point: 9, traits: ''},
        { id: 1, metatype: 'Elf', special_attributes_point: 8, traits: 'Low-light vision'},
        { id: 2, metatype: 'Dwarf', special_attributes_point: 7, traits: 'Thermographic vision, +2 dice for pathogen and toxin resistance, +20% increased Lifestyle cost'},
        { id: 3, metatype: 'Ork', special_attributes_point: 7, traits: 'Low-light vision'},
        { id: 4, metatype: 'Troll', special_attributes_point: 5, traits: 'Thermographic vision, +1 reach, +1 dermal armor, +100% increased Lifestyle cost'},
];

const _special_points = [
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9
];

let data = [
    _priorities,
    _races,
    _special_points
];

function getData() {
    return data;
}
