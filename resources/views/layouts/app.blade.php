<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('title',config('app.name', 'Triple A'))</title>
        <link rel="icon" href="{{asset('images/logo.png')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/item.css') }}">



    </head>
    <body class="font-sans antialiased">
        <div>
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                @yield('content')
                <footer class="welcomeFooter">
                    <div>
                        <h3>&copy; Designed by <a href="http://saprout.000webhostapp.com/" target="blank">Div Saprout</a></h3>
                    </div>
                    <div>
                        <h3>&copy; Triple_A All rights reserved </h3>
                        <a href=""><img src="{{asset('SVG/facebook.svg')}}" alt=""></a>
                    </div>
                </footer>
            </main>
        </div>
                <!-- Scripts -->
      {{--   <script src="{{ asset('js/app.js') }}" defer></script> --}}
      <script src="{{ asset('js/query.js') }}"></script>

      <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
