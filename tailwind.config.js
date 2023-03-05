/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
        animatedSettings: {
            animatedSpeed: 500,
            classes: ['fadeInDown', 'fadeInLeft', 'fadeInRight', 'fadeInUp']
        },
    },
    plugins: [
        require('daisyui'),
        require('tailwindcss-animatecss'),
    ],
    darkMode: 'class',
    daisyui: {
        styled: true,
        themes:  ["light", "dark"] //["light", "dark"],
    }
}
