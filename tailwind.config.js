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
                'old-gray': '#212121'

            },
            backgroundColor: {
                'old-gray': '#212121'

            },
            textColor: {
                'old-gray': '#212121'

            },
            borderColor: {
                'old-gray': '#212121'

            },
            outlineColor: {
                'old-gray': '#212121'

            },
        },
    },

    plugins: [forms],
};
