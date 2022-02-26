<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()  }}">
        <link rel="stylesheet" href="/css/all.css">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div id="app">
            <App></App>
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
