const mix = require('laravel-mix');

require('laravel-mix-jigsaw');
require('mix-env-file');

mix.env(process.env.ENV);

const BUILD_DIR = `./${process.env.BUILD_DIR}`;

const fs = require('fs');
fs.rmSync(BUILD_DIR, { recursive: true, force: true });
fs.mkdirSync(BUILD_DIR, { recursive: true });

const BASE_PATH = process.env.BASE_PATH;

mix.setPublicPath(BUILD_DIR);

mix.webpackConfig({
    watchOptions: {
        ignored: [
            require('path').posix.resolve(__dirname, BUILD_DIR)
        ]
    }
});

mix.copy('source/*.php', BUILD_DIR);
mix.copyDirectory('source/_images', `${BUILD_DIR}/images`);
mix.copyDirectory('source/_layouts', `${BUILD_DIR}/_layouts`);

mix.jigsaw()
    .js('source/_assets/js/jquery.center.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css', {
        additionalData: `$base-path: "${ mix.inProduction() ? BASE_PATH : '' }";`,
    })
    .options({
        processCssUrls: false,
    })
    .version();