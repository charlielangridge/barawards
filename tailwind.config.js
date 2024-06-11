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
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                variex: ['variex', 'sans-serif'],
            },
            colors: {
                'tealBrighton': '#029FA2',
                'tealLight': '#51B9A4',
                'tealDark': '#038E9E',
                'cream': '#FEFCE8',
            }
        },
    },

    plugins: [forms],
};
