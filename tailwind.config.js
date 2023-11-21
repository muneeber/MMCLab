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
        },
    },

    plugins: [forms],
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
          {
            mytheme: {
                "primary": "#3498db",        // Royal Blue
                "secondary": "#2ecc71",      // Emerald Green
                "accent": "#e74c3c",         // Tomato Red
                "neutral": "#ecf0f1",        // Cloud White
                // "base-100": "#2c3e50"        // Charcoal
            },
          },
          
          "cupcake",
        ],
      },
    
};
