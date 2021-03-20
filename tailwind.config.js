const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                rakkas: ['Rakkas', 'cursive'],
            },
            colors: {
                green: {
                    irish: '#0e9c62'
                },
                blue: {
                    cumbria: '#0071CD'
                },
                red: {
                    liverpool: '#d00027',
                    original: '#ff0000'
                }
            }
        },
            fontSize: {
                'headingParagraph': '1.5rem',
            },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
