const { colors } = require('laravel-mix/src/Log');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*', // exclude temporary files
    'node_modules/preline/dist/*.js'
  ],{ dot: true }),
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans],
      },
      colors: {
      }
    },
  },
  plugins: [
    require('preline/plugin')
  ],
};
