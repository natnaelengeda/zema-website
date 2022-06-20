const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            darkMode: 'class',
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                Fascinate: ['Fascinate', 'cursive'],
                Staatliches: ['Staatliches', 'cursive']
            },
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
        require('@tailwindcss/forms'),
        require('tailwind-scrollbar'),
        require('flowbite/plugin'),
    ],
    variants: {
        scrollbar: ['rounded'],
        scrollbar: ['dark'],
      }
};
