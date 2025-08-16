/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        'box': '-5px 5px 5px 5px rgba(0, 0, 0, 0.3)',
      },
      fontFamily: {
        pixeled: ['pixeled', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
