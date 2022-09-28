import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)
Vue.component('example-component1', require('./components/ExampleComponent.vue').default);
Vue.component('example-component', require('./components/Navbar.vue').default);
export default new Vuetify({
    Vuetify: new Vuetify(),    
    el: '#app',
   
    
   
})