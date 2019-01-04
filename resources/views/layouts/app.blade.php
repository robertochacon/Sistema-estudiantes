<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

    <v-toolbar dark app>
    <v-toolbar-title class="text-uppercase grey--text">
        <span class="pink--text">Adorates</span>
    </v-toolbar-title>

    <v-spacer></v-spacer>

    @guest

    <a href="{{ route('login') }}" style="text-decoration:none;">
    <v-btn dark >
        <span>Login</span>
        <v-icon right class="pink--text">person</v-icon>
    </v-btn>
    </a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" style="text-decoration:none;">
    <v-btn dark>
        <span>Registro</span>
        <v-icon right class="pink--text">assignment</v-icon>
    </v-btn>
    </a>
    @endif
    @else
 
    <v-menu flat>
        <v-btn slot="activator" color="primary" dark>{{ Auth::user()->name }}</v-btn>
        <v-list>
            <v-list-tile>

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            </v-list-tile>
        </v-list>
    </v-menu>

    @endguest

</v-toolbar>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
