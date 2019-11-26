<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
        <div id="app" class="h-screen flex items-center justify-center bg-teal-lightest font-sans">
{{--            <example-component></example-component>--}}
            <todo-list></todo-list>
        </div>

    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>
