module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false,
  theme: {
    extend: {
      fontFamily: {
        qsand: ['Quicksand', 'sans-serif'],
      },
      colors: {
        theme: {
          primary: '#1c263d',
          secondary: '#273146',
          contrast: '#5868f0',
          hover: '#495163'
        }
      }
    }
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
  variants: {
    extend: {},
  },
}
