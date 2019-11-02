<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('meta')

    <title>Canvas{{ config('app.name') ? ' ― ' . config('app.name') : '' }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Karla|Merriweather">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset(mix(sprintf('css/%s', $stylesheet), 'vendor/canvas')) }}">

{{--    <link rel="shortcut icon" href="{{ mix('favicon.ico', 'vendor/canvas') }}">--}}
</head>
<body>
<div id="canvas">
    <router-view></router-view>
</div>

@javascript('Canvas', $scripts)

<script type="text/javascript" src="{{ mix('js/app.js', 'vendor/canvas') }}"></script>
</body>
</html>
