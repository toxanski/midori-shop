module.exports = {
  content: [
    "../views/**/*.php",
    "../widgets/template/*.php",
    "../modules/**/views/**/*.php",
    "./*.html",
    "./dist/**/*.js",],
  theme: {
    // colors: {
      // orange: {
      //   DEFAULT: '#FF9846',
      //   premium: '#F46D40'
      // }
    // },
    extend: {},
  },
  corePlugins: {
    ringColor: false,
  },
  plugins: [
    // require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio')
  ],
}
