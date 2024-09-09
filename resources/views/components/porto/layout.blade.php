<!doctype html>
<html>

<head>
    {{-- Meta Tags --}}
    <x-porto.meta></x-porto.meta>

    <title>{{ $title }} &mdash; {{ env('APP_NAME') }}</title>

    {{-- Links --}}
    <x-porto.link></x-porto.link>

    @vite('resources/css/app.css')
</head>

<body class="font-comm">

    {{-- Header Section --}}
    <x-porto.header></x-porto.header>

    {{-- Content Section --}}
    {{ $slot }}

    {{-- Script --}}
    <x-porto.script></x-porto.script>

</body>

</html>
