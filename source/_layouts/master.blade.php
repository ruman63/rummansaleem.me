<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">     
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">

        <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
        <link rel="manifest" href="/assets/site.webmanifest">
        <link rel="mask-icon" href="/assets/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        @yield('head')
    </head>
    <body class="font-sans">
        <div id="app" class="flex flex-col min-h-screen">
            @include('_partials.header')
            <main class="flex-1">
                @yield('main-content')
            </main>
            @include('_partials.footer')
        </div>
    </body>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @yield('scripts')
</html>
