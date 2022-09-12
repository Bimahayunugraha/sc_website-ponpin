const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#14b8a6',
                secondary: '#64748b',
                dark: '#0f172a',
                text: '#dadae1',
                table: '#28293D',
            },
            inset: {
                '100': '100%',
            },
            backgroundColor: {
                default: '#f9f9f9',
            },
            backgroundImage: {
                img: "url('/img/ponpinor.jpg')",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
