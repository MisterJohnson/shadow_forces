const actions = {
    updatePriorities: (context, payload) => {
        context.commit("creation/UPDATE_DATA", payload);
    }
};

export default actions;
