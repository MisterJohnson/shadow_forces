const actions = {
    updatePriorities: (context, payload) => {
        context.commit("metatype/UPDATE_DATA", payload);
    }
};

export default actions;
