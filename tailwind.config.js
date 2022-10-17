const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './src/**/*.{html,js}',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],
    daisyui: {
        themes: false,
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

        },
    },

    plugins: [require('@tailwindcss/forms'),
        require('tw-elements/dist/plugin'),
        require("daisyui"),
        require('tailwind-scrollbar-hide'),
    ],
};
