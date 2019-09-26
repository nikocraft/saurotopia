let mix = require('laravel-mix');
const path = require('path');

mix.webpackConfig({
    resolve: {
        alias: {
            root: path.resolve(__dirname, './resources/js'),
            styles: path.resolve(__dirname, './resources/sass'),
            frontend: path.resolve(__dirname, './resources/js/frontend'),
            utils: path.resolve(__dirname, './resources/js/utils'),
            directives: path.resolve(__dirname, './resources/js/directives')
        }
    }
});

// mix.setPublicPath('resources/sass')
//     .css('resources/sass/output.css', 'tailwindpurged.css')
//     .purgeCss({
//         // Will *only* look for views and simplemde classes
//         paths: () => glob.sync([
//             path.join(__dirname, 'theme/views/**/*.blade.php'),
//         ]),
//     });

mix.setPublicPath('theme/assets')
    .js('resources/js/frontend/app.js', 'js')
    .sass('resources/sass/theme.scss', 'css/styles.css')
;


mix.version();
