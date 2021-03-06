<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

  <div id="app">
    <v-app>
      <v-content>

            <!-- <personas></personas> -->
            <!-- <v-btn class="red white--text">
            <v-icon>folder</v-icon>
            <span>Archivo</span>
            </v-btn> -->

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


            <router-view></router-view>


      </v-content>
    </v-app>
  </div>





    <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
