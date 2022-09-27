import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import colors from 'vuetify/lib/util/colors'
Vue.use(Vuetify)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
export default new Vuetify({
    Vuetify: new Vuetify(),    
    el: '#app',
    
   
})