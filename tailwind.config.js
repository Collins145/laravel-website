const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                "deep-blue" : "#0a192f",
                "light-gray" : "#ccd6f6",
                "deep-gray" : "#8892b0",
                "green" : "#64ffda",
                "bg-blue-base" : "#172a45",
                "bg-dark-blue" : "#020c1b",
              },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
