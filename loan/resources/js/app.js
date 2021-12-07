import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import { InertiaLink} from "@inertiajs/inertia-vue/src";
import VueToastr2 from 'vue-toastr-2'
import 'vue-toastr-2/dist/vue-toastr-2.min.css'
import '@mdi/font/css/materialdesignicons.css'
import AppLayout from "./Pages/Partials/AppLayout";


import vuetify from "vuetify";

window.toastr = require('toastr')

Vue.use(VueToastr2)
Vue.use(vuetify);
Vue.component('app-layout',AppLayout);

Vue.prototype.$route = route
Vue.component('inertia-link',InertiaLink);
InertiaProgress.init();

createInertiaApp({
    id:'app',
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            vuetify:new vuetify(),
            render: h => h(App, props),
        }).$mount(el)
    },
})
