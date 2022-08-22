<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Lițcan Technologies') }}</title>


        <link rel="icon" type="image/png" href="{{ asset('img/logo/logo_only.png') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">


        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        @inertiaHead
    </head>

    <style>
        html, body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            background-color: white;
            color: black;
            /*overflow: hidden;*/
            /*overflow-y: scroll;*/
        }
    </style>

    <body class="font-sans antialiased p-0" >


        @inertia

{{--        @env ('local')--}}
{{--            <script src="http://localhost:8080/js/bundle.js"></script>--}}
{{--            <script src="/node_modules/dist/js/index.min.js"></script>--}}
{{--        @endenv--}}


    </body>
</html>
