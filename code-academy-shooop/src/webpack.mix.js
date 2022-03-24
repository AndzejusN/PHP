const mix = require('laravel-mix');
const ESLintPlugin = require('eslint-webpack-plugin');

mix.disableSuccessNotifications();

mix.version();

const options = {
    extensions: [`js`, `vue`],
}

mix.webpackConfig({
    plugins: [new ESLintPlugin(options)],
});

if (mix.inProduction()) {
    mix.sourceMaps();
}

// mix.js('resources/js/app.js', 'public/js/app.js').postCss('resources/css/app.css', 'public/css/app.css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

mix.js('resources/js/shop/main.js', 'public/js/shop.js').vue();
mix.sass('resources/sass/shop/app.scss','public/css/shop.css');
