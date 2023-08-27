module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*', // exclude temporary files
    'node_modules/preline/dist/*.js'
  ],{ dot: true }),
  theme: {
    extend: {},
  },
  plugins: [
    require('preline/plugin')
  ],
};
