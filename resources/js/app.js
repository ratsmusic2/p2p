import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // for toggling tabs
    const tab1 = document.querySelector('.tab-1');
    const tab2 = document.querySelector('.tab-2');

    tab1?.addEventListener('click', () => {
        tab1.classList.add('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
        tab2.classList.remove('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
    });

    tab2?.addEventListener('click', () => {
        tab2.classList.add('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
        tab1.classList.remove('bg-brand', 'rounded-tl-lg', 'rounded-tr-lg');
    });
});

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

    openNavbarButton?.addEventListener("click", function() {
        navbar.style.width = "240px";
        sidebar.style.width = "250px";
    });

    closeNavbarButton?.addEventListener("click", function() {
        navbar.style.width = "0";
        sidebar.style.width = "0";
    });
    
    navToggle?.addEventListener("click", function() {
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
});