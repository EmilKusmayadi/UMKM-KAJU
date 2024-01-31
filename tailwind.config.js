import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'old-gray': '#212121',
                'green': '#345E5C',
                'peanut': '#E8C597'
            },
            backgroundColor: {
                'old-gray': '#212121',
                'green': '#345E5C',
                'peanut': '#E8C597'
            },
            textColor: {
                'old-gray': '#212121',
                'green': '#345E5C',
                'peanut': '#E8C597'

            },
            borderColor: {
                'old-gray': '#212121',
                'green': '#345E5C',
                'peanut': '#E8C597'

            },
            outlineColor: {
                'old-gray': '#212121',
                'green': '#345E5C',
                'peanut': '#E8C597'

            },
        },
    },

    plugins: [forms],
};
