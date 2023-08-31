let docroot = process.env.DDEV_DOCROOT;
let filesdir = process.env.DDEV_FILES_DIR;
let url = process.env.DDEV_HOSTNAME;

if (filesdir === "") {
    filesdir = null
}

const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .webpackConfig({
        output: {
            publicPath: '/assets/build/js/',
            chunkFilename: '[name].[chunkhash].js',
        }
    })
    .browserSync({
        ignore: ["node_modules", filesdir, "vendor"],
        open: false,
        ui: false,
        server: false,
        proxy: {
            target: "localhost"
        },
        host: url,
        files: [docroot],
    })
    .sourceMaps()
    .version();
