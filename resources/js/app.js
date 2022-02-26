require('./bootstrap');

import { createApp } from 'vue';
import router from './router';
import common from './common';
//import { createVuetify } from 'vuetify'
import App from './components/App.vue';
let app = createApp(App)
//let vuetify = createVuetify() // Replaces new Vuetify(...)
app.use(router)
app.mixin(common)
//app.use(vuetify)
// import 'vuetify/dist/vuetify.min.css'
app.mount('#app')

