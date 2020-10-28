let mix = require('laravel-mix');

mix.react('resources/assets/js/bootstrap.js', 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic.min.css')
    .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic.min.js')
    .webpackConfig({
        module: {
            rules:[
                {
                    test: /\.tsx?$/,
                    loader: "ts-loader",
                    exclude: /node_modules/
                },
                {
                    test: /\.(js|jsx)$/,
                    exclude: /node_modules/,
                    use: {
                      loader: "babel-loader"
                    }
                }
            ]
        },
        resolve: {
            extensions: ["*", ".js", ".jsx", ".ts", ".tsx"]
        }
    });