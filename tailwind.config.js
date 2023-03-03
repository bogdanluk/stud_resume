/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
        animatedSettings: {
            animatedSpeed: 300,
            classes: ['fadeIn']
        },
    },
    plugins: [
        require('daisyui'),
        require('tailwindcss-animatecss'),
    ],
    darkMode: 'class',
    daisyui: {
        styled: false,
        themes: false, //["light", "dark"],
    }
}
