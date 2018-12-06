const mix = require('laravel-mix');
const VueLoaderPlugin = require('vue-loader/lib/plugin')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath('public');

mix.sourceMaps()
    .sass('resources/sass/frontend/app.scss', 'css/frontend.css')
    .sass('resources/sass/backend/app.scss', 'css/backend.css')
    .stylus('resources/styl/custom.styl', 'css/custom.css',{
        use: [
          require('rupture')()
        ]
      })
    .js('resources/js/frontend/app.js', 'js/frontend.js')
    .js([
        'resources/js/backend/before.js',
        'resources/js/backend/app.js',
        'resources/js/backend/after.js'
    ], 'js/backend.js')
    .extract([
        'jquery',
        'bootstrap',
        'popper.js/dist/umd/popper',
        'axios',
        'sweetalert2',
        'lodash',
        '@fortawesome/fontawesome-svg-core',
        '@fortawesome/free-brands-svg-icons',
        '@fortawesome/free-regular-svg-icons',
        '@fortawesome/free-solid-svg-icons'
    ])
    .webpackConfig({
        plugins: [
            new VueLoaderPlugin()
        ]
    });

if (mix.inProduction() || process.env.npm_lifecycle_event !== 'hot') {
   // mix.version();
}
if (process.env.npm_lifecycle_event !== 'hot') {
    mix.version()
  }
  const path = require('path');
  // fix css files 404 issue
  mix.webpackConfig({
    devServer: {
      contentBase: path.resolve(__dirname, 'public'),
    }
  });

