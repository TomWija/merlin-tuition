<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Merlin Tuition</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" >
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=l99yw2pv4tseecoqj9itmd6u0d24pup3tkspobc71slnwom1"></script>
        <script>tinymce.init({ selector:'textarea',
                               plugins: 'lists',
                               toolbar:'bold italic underline alignleft alignright aligncenter fontsizeselect undo redo numlist bullist'});</script>
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
