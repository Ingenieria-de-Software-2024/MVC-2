const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
module.exports = {
  mode: 'development',
  entry: {
    'js/app' : './src/js/app.js',
    'js/inicio' : './src/js/inicio.js',
    'js/productos/index' : './src/js/productos/index.js',
    'js/usuarios/index' : './src/js/usuarios/index.js',
    'js/aplicacion/index' : './src/js/aplicacion/index.js',
    'js/rol/index' : './src/js/rol/index.js',
    'js/permiso/index' : './src/js/permiso/index.js',
    'js/auth/login': './src/js/auth/login.js',

  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public/build')
  },
  plugins: [
    new MiniCssExtractPlugin({
        filename: 'styles.css'
    })
  ],
  module: {
    rules: [
      {
        test: /\.(c|sc|sa)ss$/,
        use: [
            {
                loader: MiniCssExtractPlugin.loader
            },
            'css-loader',
            'sass-loader'
        ]
      },
      {
        test: /\.(png|svg|jpe?g|gif)$/,
        type: 'asset/resource',
      },
    ]
  }
};