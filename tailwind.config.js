/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        primary: '#1A1C1E',
        secondary: '#FFFFFF',
        darkgray: 'rgb(26 28 30 / 75%)',
        graybase: 'rgb(26 28 30 / 50%)',
        lightgray: 'rgb(26 28 30 / 25%)',
        ashwhite: 'rgb(26 28 30 / 5%)',

      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;

/** #eeeeee */
