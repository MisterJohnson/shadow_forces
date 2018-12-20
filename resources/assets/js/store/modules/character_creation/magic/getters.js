const magics = state => state.magics;
const magic = state => {
    return state.magics.find(magic => magic.id === state.magicId);
};
const magicId = state => state.magicId;

export default {
    magics,
    magic,
    magicId
};
