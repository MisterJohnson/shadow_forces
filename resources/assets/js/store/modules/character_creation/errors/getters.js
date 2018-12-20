const errors = state => state.errors;
const error = state => id => state.errors[id];

export default {
    errors,
    error
}
