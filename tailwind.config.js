import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: "#09BE8B",
                primaryBg: "#141A26",
                secondaryBg: "#1E2636",
            },
            width: {
                "custom-header": "calc(100vw - 295px)",
                "sidebar-width": "250px",
                "navbar-width": "240px",
            },
            height: {
                "custom-nav": "calc(100vh - 2rem)",
            },
            boxShadow: {
                drop: "0px 4px 10px #00072D",
            },
        },
    },

    plugins: [
        forms,
        require("tailwind-scrollbar"),
    ],
};
