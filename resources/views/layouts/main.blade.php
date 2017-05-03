<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Merlin Tuition</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" >
    </head>
    <body>
        @include('layouts.heading')
        @yield('content')
        @include('layouts.footer')
        @include('modals.contact-us-modal')
        <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/cookie-bar/1/cookiebar-latest.min.js?theme=flying&tracking=1"></script>
    </body>
</html>
