/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'primario': ['Dancing Script', 'cursive'],
        'secundario': ['Josefin Sans', 'sans-serif'],
      },
      colors: {
        'color-primary': '#010E0B',
        'color-secondary': '#0C221F',
        'color-aux': '#00876A',
        'color-bg': '#f5f5f5'

      },
      textColor: {
        'primary': '#010E0B',
        'secondary': '#008769',
        'aux': '#f5f5f5'
      },
    },
  },
  plugins: [
  ],
}