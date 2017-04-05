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
        @include('components.heading')
        @yield('content')

        <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
