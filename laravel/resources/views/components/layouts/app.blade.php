<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2.0" />

        <title>Translations</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head>

    <body>
        {{ $slot }}

        @vite('resources/js/app.js')
        @livewireScriptConfig
    </body>
</html>
