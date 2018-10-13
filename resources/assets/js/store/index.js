import Vue from 'vue';
import Vuex from 'vuex';
import magicModule from './modules/magic';
import metatypeModule from './modules/metatype';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        magic: magicModule,
        metatype: metatypeModule,
    },
});
