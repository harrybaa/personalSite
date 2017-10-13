const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
   filename: "[name].[contenthash].css",
   disable: process.env.NODE_ENV === "development"
});

module.exports = {
  devtool: "eval-source-map",
  entry: __dirname + "/app/main.js",
  output: {
    path: __dirname + "/public",
    filename: "bundle.js"
  },
  module: {
    rules: [{
      // test: /\.scss$/,
      // use: extractSass.extract({
      //   use: [{
      //     loader: "css-loader"
      //   }, {
      //     loader: "sass-loader"
      //   }],
      //   fallback: "style-loader"
      // })
      test: /\.scss$/,
      use: [{
        loader: "style-loader"
      }, {
        loader: "css-loader"
      }, {
        loader: "sass-loader"
      }]
    }]
  },
  plugins: [
    extractSass
  ]
}