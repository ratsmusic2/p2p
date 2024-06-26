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

        <!-- css -->
        @vite('resources/css/global.css')
        @vite('resources/css/app.css')

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const openNavbarButton = document.querySelector(".open-navbar");
                const closeNavbarButton = document.querySelector(".close-navbar");
                const navToggle = document.querySelector(".nav-toggle");
                const navbar = document.querySelector(".navbar");
                const sidebar = document.querySelector(".sidebar");
                const headerContainer = document.querySelector(".header-container");
                const mainContainer = document.querySelector(".main-container");
                const logo = document.querySelector('.logo');

                const navItems = document.querySelectorAll('.nav-items .nav-item');
                const navLinksText = document.querySelectorAll('.nav-items .nav-item a span');
                const navHeaders = document.querySelectorAll('.nav-items .nav-header');

                openNavbarButton.addEventListener("click", function() {
                    navbar.style.width = "240px";
                    sidebar.style.width = "250px";
                });

                closeNavbarButton.addEventListener("click", function() {
                    navbar.style.width = "0";
                    sidebar.style.width = "0";
                });
                
                navToggle.addEventListener("click", function() {
                    if(navToggle.classList.contains('active')) {
                        navbar.style.width = "100px";
                        sidebar.style.width = "110px";
                        navToggle.classList.add('rotate-180');
                        navToggle.classList.remove('active');
                        headerContainer.style.marginLeft = "125px";
                        headerContainer.style.width = "calc(100vw - 145px)";
                        mainContainer.style.marginLeft = "100px";
                        logo.classList.remove('mb-6');
                        navLinksText.forEach(linkText => {
                            linkText.style.display = "none";
                        });
                        navHeaders.forEach(header => {
                            header.style.width = "35px";
                            header.style.display = "flex";
                            header.style.justifyContent = "center";
                            header.style.alignItems = "center";
                        });
                        navItems.forEach(item => {
                            item.style.width = "75px";
                            item.style.display = "flex";
                            item.style.justifyContent = "center";
                            item.style.alignItems = "center";
                        });
                    } else {
                        navbar.style.width = "240px";
                        sidebar.style.width = "250px";
                        navToggle.classList.remove('rotate-180');
                        navToggle.classList.add('active');
                        headerContainer.style.marginLeft = "275px";
                        mainContainer.style.marginLeft = "250px";
                        headerContainer.style.width = "calc(100vw - 295px)";
                        logo.classList.add('mb-6');
                        navLinksText.forEach(linkText => {
                            linkText.style.display = "inline-block";
                        });
                        navHeaders.forEach(header => {
                            header.style.width = "190px";
                            header.style.display = "block";
                        });
                        navItems.forEach(item => {
                            item.style.width = "206px";
                            item.style.display = "block";
                        });
                    }
                });

                function logout() {
                    document.getElementById('logoutForm').submit();
                }
            });
        </script>
    </body>
</html>
