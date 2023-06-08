const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'light-blue': colors.sky,
        cyan: colors.cyan,
      },
      backgroundImage: 
      {
        experience:
          "url('https://wallpapercave.com/wp/wp9489665.jpg')",
        monster:
          "url('https://cdnb.artstation.com/p/assets/images/images/039/645/423/large/white-dog-studios-monstercreatureslieherefinaledited.jpg?1626504404')",
        guts:
          "url('https://images6.alphacoders.com/788/788448.jpg')",
        mini:
          "url('https://images.unsplash.com/photo-1557358070-ef6ae6f84629?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1566&q=80')",
      },
    },
  },
  plugins: [],
}
