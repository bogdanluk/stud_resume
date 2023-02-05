/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('daisyui')
    ],
    darkMode: 'class',
    daisyui: {
        styled: false,
        themes: false, //["light", "dark"],
    }
}
