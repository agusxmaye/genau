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
                sans: ['Space Grotesk', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'neo-yellow': '#fde047',
                'neo-pink': '#f9a8d4',
                'neo-cyan': '#67e8f9',
                'neo-lime': '#bef264',
                'neo-purple': '#d8b4fe',
                'neo-bg': '#f8fafc',
            },
            boxShadow: {
                'neo': '4px 4px 0px 0px rgba(0,0,0,1)',
                'neo-md': '6px 6px 0px 0px rgba(0,0,0,1)',
                'neo-lg': '8px 8px 0px 0px rgba(0,0,0,1)',
            },
            borderWidth: {
                '3': '3px',
            }
        },
    },

    plugins: [forms],
};
