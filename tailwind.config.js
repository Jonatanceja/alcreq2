import theme from 'tailwindcss/defaultTheme'
import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    extend: {
      colors: {
        flag: {
          light: '#287E4A',
          DEFAULT: '#1A5632',
          dark: '#113921',
        },
        silver: {
          light: '#D3DADC',
          DEFAULT: '#8C9091',
          dark: '#515354',
        },
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [forms, typography],
  content: [
    'site/templates/**/*.html',
    'site/templates/**/*.php',
    'resources/**/*.js',
    'resources/**/*.vue',
  ],
}
