const actions = {
    updateData: ({commit}, payload) => {
        commit('UPDATE_DATA', payload);
        commit('FILTER_METATYPE', payload.ranking);
    }
};

export default actions;
