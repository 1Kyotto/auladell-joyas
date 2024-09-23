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
        'cinzel': ['Cinzel', 'serif'],
        'fauna': ['Fauna One', 'serif'],
      },
      colors: {
        'primario': '#FFFFF8',
        'titulos': '#2F3E53',
        'botones':'#213E3E',
      },
      textColor: {
        primary: '#F4F5F7',
      },
    },
  },
  plugins: [
  ],
}

