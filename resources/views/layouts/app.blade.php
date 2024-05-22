<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Scripts/css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-700 font-sans text-white antialiased">

    {{-- Header  --}}
    @include('layouts.header')

    <!-- Page Content -->
    <main class='flex min-h-[calc(100vh-5rem)] flex-col'>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>

</html>
