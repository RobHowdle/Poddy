const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Open Sans',
          ...defaultTheme.fontFamily.sans
        ]
      },
      colors: {
        black: '#000000',
        'back-light': '#303033',
      }
    },
  },
  variants: {
    extend: {
      divideWidth: ['hover', 'focus'],
    },
  },
  plugins: [],
}
