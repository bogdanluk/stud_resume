/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {

    extend: {
      backgroundImage: theme => ({
        'waves': "url('/resources/img/wave.svg')"
      })
    }
    },
  plugins: []
}
