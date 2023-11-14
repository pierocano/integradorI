const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                montserrat: "Montserrat"
            },
            screens: {
                "--sm": "320px",
                "-sm": "420px",
                ".sm": "550px",
                "+md": "830px",
                "++md": "870px",
                "+lg": "1180px",
                "++lg": "1200px",
                "--xlg": "1440px",
                "+xxl": "1600px",
                "++xxl": "1920px"
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
