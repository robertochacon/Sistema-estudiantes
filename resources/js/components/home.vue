<template>
<div>
<nav>
<v-toolbar flat app>
    <v-toolbar-side-icon @click="drawer = !drawer"></v-toolbar-side-icon>
    <v-toolbar-title class="text-uppercase grey--text">
        <span>rca</span>
        <span class="font-weight-light">studios</span>
    </v-toolbar-title>
    <v-spacer></v-spacer>

    <v-menu offset-y>
        <v-btn flat color="grey" slot="activator">
            <span>Menu</span>
            <v-icon right>expand_more</v-icon>
        </v-btn>
        <v-list>
            <v-list-tile v-for="link in links" :key="link.text" router :to="link.route">
                <v-list-tile-title>@{{ link.text }}</v-list-tile-title>
            </v-list-tile>
        </v-list>
    </v-menu>

    <v-btn flat color="grey">
        <span>Salir</span>
        <v-icon right class="red--text">exit_to_app</v-icon>
    </v-btn>
</v-toolbar>

<v-navigation-drawer flat app v-model="drawer" class="black">
    <div>
    <v-list>
        <v-list-tile v-for="link in links" :key="link.text" router :to="link.route">
            <v-list-tile-action>
                <v-icon :class="link.color+'--text'">@{{ link.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title class="white--text">@{{ link.text }}</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
    </v-list>
    </div>
</v-navigation-drawer>
</nav>



</div>
</template>

<script>
export default {
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
}
</script>
