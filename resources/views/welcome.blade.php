<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        {{-- Cache busting --}}
        <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
        <title>Cache Busting</title>
    </head>
    <body>
        <div id="app"></div>
        <h1>Cache Busting</h1>
        <p>Versioning in webpack.mix.js</p>
        <p>with dynamically generated hashes in app.css & app.js files</p>
        {{-- <script src="/js/app.js"></script> --}}
        {{-- Cache busting --}}
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
