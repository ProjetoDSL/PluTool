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
          secondary: '#23304d',
          light: '#304169',
          contrast: '#5868f0',
          hover: '#3a4ded',
          green: '#57c64b',
          blue: '#4b57c6',
          red: '#c64b57'
        }
      }
    }
  },
  plugins: [
    require('tailwind-scrollbar'),
  ],
  variants: {
    scrollbar: ['rounded'],
    extend: {
      backgroundColor: ['active'],
    }
  },
}
