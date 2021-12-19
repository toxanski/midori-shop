module.exports = {
  content: [
    "../views/**/*.php",
    "../widgets/template/*.php",
    "../modules/**/views/**/*.php",
    "./*.html",
    "./dist/**/*.js",],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio')
  ],
}
