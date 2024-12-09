const mix = require('laravel-mix');

require('laravel-mix-jigsaw');
require('mix-env-file');

mix.disableSuccessNotifications();

mix.env(process.env.ENV);

const publicPath = `./source/${process.env.BASE_PATH}`;

mix.setPublicPath(publicPath);

mix.webpackConfig({
    watchOptions: {
        ignored: [
            require('path').posix.resolve(__dirname, publicPath)
        ]
    }
});

mix.copyDirectory('source/_images', `${publicPath}/images`);

mix.jigsaw()
    .js('source/_assets/js/jquery.center.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css', {
        additionalData: `$base-path: "${process.env.BASE_PATH}";`,
    })
    .options({
        processCssUrls: false,
    })
    .version();
