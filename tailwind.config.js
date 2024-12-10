const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './src/**/*.{html,js}',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        screens: {
            sm: '540px',
            md: '720px',
            lg: '960px',
            xl: '1140px',
            xxl: '1320px',
          },
        container: {
            center: true,
        },
        fontSize: {
            'sm': '.8rem',
            'md': '1rem',
            'lg': '1.125rem',
            'xl': '1.25rem',
            '2xl': '1.5rem',
            '3xl': '1.75rem',
            '4xl': '2rem',
            '5xl': '2.25rem',
            '6xl': '2.5rem',
            '7xl': '2.75rem',
            '8xl': '3rem',
            '9xl': '3.25rem',
            '10xl': '3.5rem',
            '11xl': '3.75rem',
            '12xl': '4rem',
        },
    },
    plugins: [],
};
