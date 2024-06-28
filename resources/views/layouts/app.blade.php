<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite([
            'resources/css/global.css',
            'resources/css/app.css',
            'resources/js/app.js'
        ])
        
        <!-- Additional Conditional Scripts -->
        {{ $scripts ?? '' }}
    </head>
    <body class="bg-primaryBg text-white">
        <div class="w-full flex p-0 md:p-5">
            @include('layouts.navigation')
            @include('layouts.header')
            <!-- Main Content -->
            <div class="main-container flex-1 pl-2 md:pl-8 pr-2 pb-8 pt-2 md:ml-[250px] mt-48 sm:mt-24 transition-all">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
