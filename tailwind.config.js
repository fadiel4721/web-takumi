/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
      },
      colors: {
        'primary': '#1f2937',
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '2rem',
        },
      },
    },
  },
  plugins: [],
}