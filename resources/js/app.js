
import Vue from 'vue'
import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import Routes from './routes'

Vue.use(Vuetify)
Vue.use(VueRouter)

let router = new VueRouter({
    mode: 'history',
    routes: Routes
});

new Vue({
    router,
    el: '#app',
    data(){
        return{
            drawer:false,
            links:[
                {icon:'dashboard',color:'red',text:'Dashboard',route:'/'},
                {icon:'person',color:'yellow',text:'People',route:'/personas'},
                {icon:'person',color:'purple',text:'Team',route:'/contacto'},
            ],
            snackbar:false
        }
    }  
})