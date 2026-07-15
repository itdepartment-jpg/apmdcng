import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],

    theme: {
        extend: {
            screens: {
                '2xl': '1440px',
              'xl': '1195px',
              'lg': '1096px',
              'tab': '960px',
              'md': '860px',
              'sm': '640px',
              'xs': '450px'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary': '#EA222F',
                'secondary': '#2ecc70',
                'accent': '#EA222F',
                'backg': '#ffffff',
                'backg2': '#f0f0f0',
                'text': '#333333',
                'drkprimary': '#47a0ff',
                'drksecondary': '#33d175',
                'drkaccent': '#ed970c',
                'drkbackg': '#000000',
                'drktext': '#cccccc',

                'tertiary-color': '#FFC107',


            }
        },
    },



    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/typography')
    ]

};
