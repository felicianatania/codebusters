import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors:{
                black: '#222222',
                gray: '#555555',
                white: '#FFFFFF',
                darkorange: '#F77744',
                lightorange: '#FCBD00',
                yellow: '#FEDC18',
                lightyellow: '#FFFBE8',
                darkblue: '#04A8F0',
                lightblue: '#36B9F3',
            },
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
            },
            fontSize: {
                headline: '3rem',
                title: '1.875rem',
                heading: '1.3125rem',
                subheading: '1.125rem',
                name: '1rem',
                subname: '0.875rem',
                light: '0.8rem',
            },
            borderRadius: {
                'default': '5px',
            }
        },
    },

    plugins: [forms],
};
