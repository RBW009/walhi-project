/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      center: true,
      padding: '16px',

    },
    extend: {
      fontFamily: {
        'Inter': ['Inter', 'sans-serif'],
        
      },  
      colors: {
        'primary': '#227790',
        'green2': '#8FFF00',
        'green1': '#8FFF0A80',
        'tes': 'rgba(30, 106, 133, 0)',
      },
      screens:{
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
}
