// let mix = require('laravel-mix');
// const path = require('path');
// const tailwindcss = require('tailwindcss');
// const glob = require('glob-all');
// require('laravel-mix-purgecss');
// const auroraAssets = 'node_modules/auroracss-test/';

// mix.webpackConfig({
//     resolve: {
//         alias: {
//             root: path.resolve(__dirname, auroraAssets + 'js'),
//             styles: path.resolve(__dirname, auroraAssets + 'sass'),
//             frontend: path.resolve(__dirname, auroraAssets + 'js/frontend'),
//             utils: path.resolve(__dirname, auroraAssets + 'js/utils'),
//             directives: path.resolve(__dirname, auroraAssets + 'js/directives'),
//         }
//     }
// });

// mix.setPublicPath('theme/assets')
//     .js(['resources/js/app.js', auroraAssets + 'js/frontend/app.js'], 'js')
//     .sass('resources/sass/styles.scss', 'css/styles.css')
//     .purgeCss({
//         paths: () => glob.sync([
//             path.join(__dirname, auroraAssets + 'js/frontend/**/*.vue'),
//             path.join(__dirname, 'theme/views/**/*.blade.php')
//         ]),
//     })
//     .options({
//         processCssUrls: false,
//         postCss: [ tailwindcss('./tailwind.config.js') ],
//     })

// mix.version();

let mix = require('laravel-mix');
const path = require('path');
const tailwindcss = require('tailwindcss');
const glob = require('glob-all');
require('laravel-mix-purgecss');

mix.webpackConfig({
    resolve: {
        alias: {
            root: path.resolve(__dirname, './resources/js'),
            styles: path.resolve(__dirname, './resources/sass'),
            frontend: path.resolve(__dirname, './resources/js/frontend'),
            utils: path.resolve(__dirname, './resources/js/utils'),
            directives: path.resolve(__dirname, './resources/js/directives'),
        }
    }
});

mix.setPublicPath('theme/assets')
    .js('resources/js/frontend/app.js', 'js')
    .sass('resources/sass/styles.scss', 'css/styles.css')
    .purgeCss({
        paths: () => glob.sync([
            path.join(__dirname, 'resources/js/frontend/**/*.vue'),
            path.join(__dirname, 'theme/views/**/*.blade.php')
        ]),
    })
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })

mix.version();
