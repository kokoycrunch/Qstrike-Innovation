/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#000000',
        secondary: '#EEEEEE',
        darkgray: '#555555',
        graybase: '#777777',
        lightgray: '#BBBBBB',

      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
