<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MPR') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Font Awersome -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    @yield('fonts')    


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom Styles -->
    @yield('styles')

</head>
<body>

    <div id="app">

        @include('partials.navbar-app')

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    <!-- Custom JavaScript -->
    @yield('scripts')

</body>
</html>
