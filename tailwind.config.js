const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
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
    ],
    variants: {
        scrollbar: ['rounded'],
        scrollbar: ['dark'],
      }
};
