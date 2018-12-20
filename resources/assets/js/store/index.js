import Vue from 'vue';
import Vuex from 'vuex';
import characterCreationModule from './modules/character_creation';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        creation: characterCreationModule
    },
});
