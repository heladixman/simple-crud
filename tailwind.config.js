/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'main': '#eff0f5',
      },
      backgroundImage: {
        'heroLogin': "url('/img/bank.jpg')",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
