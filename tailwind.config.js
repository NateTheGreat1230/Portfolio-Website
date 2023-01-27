//const colors = require('tailwindcss/colors')
module.exports = {
  content: ['./index.html',
'./othercrap/*.{html, js, php}'
],
darkMode: 'class',
  theme: {
    
    extend: {
      colors: {
        custBlue: {
          100: '#03e9f4',
          200: '#18273c',
          300: '#121c2c'
        }
        ,coolors: {
          'dpurp': '#432088',
          'lpurp': '#592BB6',
          'mblue': '#000B52',
          'dblue': '#040825',
          'lblue': '#1E2786',
          'white': '#F0ECF3',
          'black': '#171C1B',
          'grey': '#cccedb'
        }
        ,lightmode: {
          'blue': '#4255ff',
          'white': '#ffffff',
          'black': '#303545',
          'yellow': '#ffcd1f',
          'grey': '#646976'

        }
        ,darkmode: {
          'black': '#000000'
          ,'darkest': '#1e1e1e'
          ,'darker': '#252526'
          ,'dark': '#2d2d30'
          ,'grey': '#3e3e42'
          ,'white': '#ffffff'
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwindcss'),
    require('autoprefixer'),
  ],
}
