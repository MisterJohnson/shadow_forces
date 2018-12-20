const ADD_ERRORS = (state, error) => {
    let err = state.error;
    err.name = error.name;
    err.code = error.code;
    err.message = error.message;
    err.id = state.errors.length;
    state.errors.push(err);
};

const ADD_AND_ALERT = (state, error) => {
    let err = state.error;
    err.name = error.name;
    err.code = error.code;
    err.message = error.message;
    err.id = state.errors.length;
    state.errors.push(err);
    state.toasted.show(err.message).goAway(2500);
};

const REMOVE_ERRORS = (state, id) => {
    state.errors.splice(id, 1);
};

export default {
    ADD_ERRORS,
    ADD_AND_ALERT,
    REMOVE_ERRORS
}
