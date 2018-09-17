
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.event = new Vue();

/**
 * Alerts
 */
import Toasted from 'vue-toasted';

Vue.use(Toasted);
/**
 * Localization.
 */
import Lang from 'lang.js';
import translations from './vue-translations.js';

let lang = new Lang();
lang.setLocale(window.App.locale);
lang.setMessages(translations);

Vue.mixin({
    methods: {
        toast(message, config = {}){
            let defaultConfig = {
                containerClass: 'codebase-toast',
                duration: 3000,
            };

            this.$toasted.show(message, Object.assign(defaultConfig, config));
        },
    }
});

Vue.filter('trans', (... args) => {
    return lang.get(...args);
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('mosaique', require('./components/base/Mosaique.vue'));

const app = new Vue({
    el: '#app',

    mounted(){
        // If we have some data to flash in the session (usually to pass
        // messages after page redirection), then wait half a second and display
        // it in a toast.
        if(window.App.flash && window.App.flash.length){
            setTimeout(() => {
                this.toast(window.App.flash);
            }, 500);
        }
    }
});
