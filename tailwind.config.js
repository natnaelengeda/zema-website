module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],  
  theme: {
    extend: {
      colors: {
        'maincolor' : '#6667AB',
        'footer' : '#232629',
        'gradientcol': '#14B2DB',
        'gradientcol2' : '#58247A',
        'gradientcol3' :'#800E0E',
      },
    },
  },
  plugins: [
    // ...
    require('tailwind-scrollbar'),
],
variants: {
  scrollbar: ['rounded'],
  scrollbar: ['dark'],
}
}
