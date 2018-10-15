import Vue from 'vue';
import Vuex from 'vuex';
import magicModule from './modules/magic';
import metatypeModule from './modules/metatype';
import priorityModule from './modules/priority';
import attributesModule from './modules/attributes';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        magic: magicModule,
        metatype: metatypeModule,
        priority: priorityModule,
        attributes: attributesModule,
    },
});
