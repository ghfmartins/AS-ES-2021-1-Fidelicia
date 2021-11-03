<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fidelicia') }}</title>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/icons.min.css') }}" media="screen,projection" />
    @include('layouts.css')
    @stack('css')
</head>

<body>
    <div id="app">
        @if (auth()->check())
            @include('layouts.navbar')
        @else
            @include('layouts.navbar-out')
        @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/icons.min.js') }}"></script>
    @include('layouts.js')
    @stack('javascript')
</body>

</html>
