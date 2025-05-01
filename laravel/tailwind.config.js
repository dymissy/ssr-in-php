const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ['./**/*.blade.php'],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: {
                    50: 'var(--color-blue-50)',
                    100: 'var(--color-blue-100)',
                    200: 'var(--color-blue-200)',
                    300: 'var(--color-blue-300)',
                    400: 'var(--color-blue-400)',
                    500: 'var(--color-blue-500)',
                    600: 'var(--color-blue-600)',
                    700: 'var(--color-blue-700)',
                    800: 'var(--color-blue-800)',
                    900: 'var(--color-blue-900)',
                },
                gray: {
                    50: 'var(--color-gray-50)',
                    100: 'var(--color-gray-100)',
                    200: 'var(--color-gray-200)',
                    300: 'var(--color-gray-300)',
                    400: 'var(--color-gray-400)',
                    500: 'var(--color-gray-500)',
                    600: 'var(--color-gray-600)',
                    700: 'var(--color-gray-700)',
                    800: 'var(--color-gray-800)',
                    900: 'var(--color-gray-900)',
                },
                // Aggiungi altre categorie di colori come green, red, ecc.
            },
        },
    },
    plugins: [],
};
