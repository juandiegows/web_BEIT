import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                kanit: ['Kanit'],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'sm': '640px',
                'smd': '700px',
                'md': '768px',
                'mdx': '850px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
            },
            fontSize: {
                'xs': '0.75rem',    // Tamaño extra pequeño
                'sm': '0.875rem',   // Tamaño pequeño
                'base': '1rem',     // Tamaño base
                'lg': '1.125rem',   // Tamaño grande
                'xl': '1.25rem',    // Tamaño extra grande
                '2xl': '1.5rem',    // Tamaño doble extra grande
                '3xl': '1.875rem',  // Tamaño triple extra grande
                '4xl': '2.25rem',   // Tamaño 4 veces más grande
                '5xl': '3rem',      // Tamaño 5 veces más grande
                '6xl': '4rem',      // Tamaño 6 veces más grande
                '7xl': '5rem',      // Tamaño 7 veces más grande
                '8xl': '6rem',      // Tamaño 8 veces más grande
                '9xl': '8rem',      // Tamaño 9 veces más grande
              },
            colors: {
                primary: '#064380', // Aquí defines tu color personalizado
                secondary: '#1C3D67', // Otro ejemplo de color
                'blue-primary': '#054AAD',
                shadow: '#00D9EF', // Otro ejemplo de color
                'btn-primary': '#054AAD',  // Otro ejemplo de color
                'btn-segundary': 'white',
                'txt-primary': '#FFF', 
                txtPrimary: "white"
              },
              boxShadow: {
                'custom': '0 4px 6px -1px rgba(0, 217, 239, 0.1), 0 2px 4px -1px rgba(0, 217, 239, 0.06)',
            }
        },
    },

    plugins: [forms, typography],
};
