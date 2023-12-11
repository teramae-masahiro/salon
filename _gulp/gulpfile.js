const gulp = require('gulp');
const del = require('del');

// 本番とテストの設定
const env = process.env.NODE_ENV ? process.env.NODE_ENV.trim() : '';

// 本番環境用設定
if (env === 'production') {
  // thisCssStyle = 'compressed'; // css圧縮する
  thisCssStyle = 'expanded'; // css圧縮しない

  thisCssMap = false; // css.mapを作成しない

  thisJsBundle = false; // jsをbundleしない
  // thisJsBundle = true; // jsをbundleする
}
// テスト環境用設定
else if (env === 'development') {
  thisCssStyle = 'expanded'; // css圧縮しない

  thisCssMap = true; // css.mapを作成する

  thisJsBundle = false; // jsをbundleしない
  // thisJsBundle = true; // jsをbundleする
}


//scss
const sass = require('gulp-dart-sass'); //Dart Sass はSass公式が推奨 @use構文などが使える
const plumber = require("gulp-plumber"); // エラーが発生しても強制終了させない
const notify = require("gulp-notify"); // エラー発生時のアラート出力
const postcss = require("gulp-postcss"); // PostCSS利用
const autoprefixer = require('gulp-autoprefixer'); //ベンダープレフィックス自動付与
const mqpacker = require('css-mqpacker'); //メディアクエリをまとめる
const browserSync = require("browser-sync"); //ブラウザリロード


//webpack
const webpack = require("webpack");
const webpackStream = require("webpack-stream"); // gulpでwebpackを使うために必要なプラグイン
// webpackの設定ファイルの読み込み
const webpackConfig = require("./webpack.config");

//画像圧縮
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");


//svgスプライト
const svgmin = require('gulp-svgmin');
const svgSprite = require('gulp-svg-sprite');

//ejs
const rename = require("gulp-rename");
const replace = require("gulp-replace");
const ejs = require("gulp-ejs");
const fs = require("fs");


// 入出力するフォルダを指定
const srcBase = '../_static/src';
const assetsBase = '../_assets';
const publicBase = '../_assets/public';
const distBase = '../_static/dist';
const serverBase = '../_server/wp/wp-content/themes/dummy';

const publicPath = {
  'public':[publicBase + '/**/*', '!' + publicBase + '/**/*.gitkeep']
};

const srcPath = {
  'scss': assetsBase + '/scss/**/*.scss',
  'js': assetsBase + '/js/**/*.js',
  'img': [assetsBase + '/img/**/*', '!' + assetsBase + '/img/svg/*.svg'],
  'svg': [
    assetsBase + '/img/svg/*.svg',
  ],
  'font': assetsBase + '/font/**/*',
  'html': srcBase + '/**/*.html',
  'php': srcBase + '/**/*.php',
  'ejs': assetsBase + '/ejs/**/!(_)*.ejs',
};

const watchPath = {
  'ejs': [assetsBase + '/ejs/**/*.ejs',assetsBase + '/ejs/**/*.json']
}

const ejsData = {
  'data': assetsBase + "/ejs/data/site.json"
}

const distPath = {
  'css': distBase + '/css/',
  'js': distBase + '/js/',
  'img': distBase + '/img/',
  'svg': distBase + '/img/svg/',
  'font': distBase + '/font/',
  'html': distBase + '/',
  'php': distBase + '/',
  'ejs': distBase + '/',
};

const serverDistPath = {
  'css': serverBase + '/css/',
  'js': serverBase + '/js/',
  'img': serverBase + '/img/',
  'svg': serverBase + '/img/svg/',
  'font': serverBase + '/font/',
};

/**
 * clean
 */
const clean = () => {
  return del([distBase + '/**'], {
    force: true
  });
}

//postcss-cssnext ブラウザ対応条件 prefix 自動付与
const TARGET_BROWSERS = [
  'last 2 versions',
  'ie >= 11',
  'iOS >= 7',
  'Android >= 4.4'
];

/**
 * sass
 *
 */

const cssSass = () => {

  return gulp.src(srcPath.scss, {
      sourcemaps: thisCssMap
    })
    .pipe(
      //エラーが出ても処理を止めない
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(sass({
      outputStyle: thisCssStyle
    })) //指定できるキー nested expanded compact compressed
    .pipe(postcss([mqpacker()])) // メディアクエリを圧縮
    .pipe(autoprefixer(TARGET_BROWSERS))
    .pipe(gulp.dest(distPath.css, {
      sourcemaps: './'
    })) //コンパイル先
    .pipe(gulp.dest(serverDistPath.css, {
      sourcemaps: './'
    })) //コンパイル先
    .pipe(browserSync.stream())
    .pipe(notify({
      message: 'Sassをコンパイルしました！',
      onLast: true
    }));
}

/**
 * webpack
 * トランスパイルとバンドルを行う
 * 設定はwebpack.config.jsにて行う
 */
const jsBundle = () => {
  // bundleする
  if (thisJsBundle) {
    return webpackStream(webpackConfig, webpack)
      .pipe(gulp.dest(distPath.js))
      .pipe(gulp.dest(serverDistPath.js));
  }
  // bundleせずにコピーだけ
  else {
    return gulp.src(srcPath.js)
      .pipe(gulp.dest(distPath.js))
      .pipe(gulp.dest(serverDistPath.js))
  }
}

/**
 * 画像圧縮
 */
const imgImagemin = () => {
  return gulp.src(srcPath.img)
    .pipe(
      imagemin(
        [
          imageminMozjpeg({
            quality: 80
          }),
          imageminPngquant(),
          imageminSvgo({
            plugins: [{
              removeViewbox: false
            }]
          })
        ], {
          verbose: true
        }
      )
    )
    .pipe(gulp.dest(distPath.img))
    .pipe(gulp.dest(serverDistPath.img))
}

/**
 * SVGスプライト
 */
// sprite
const svg = () => {
  return gulp
    .src(srcPath.svg)
    .pipe(plumber({
      errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(svgmin({
      plugins: [{
          removeTitle: true
        },
        {
          removeAttrs: {
            attrs: ['fill', 'class', 'id', 'data-name', 'stroke']
          }
        },
        {
          removeStyleElement: true
        },
        {
          removeViewBox: false
        },
      ]
    }))
    .pipe(svgSprite({
      mode: {
        symbol: {
          dest: '.',
          sprite: 'sprite.min.svg'
        }
      }
    }))
    .pipe(gulp.dest(distPath.svg))
    .pipe(gulp.dest(serverDistPath.svg))
    .pipe(notify({
      message: 'SVGスプライトを生成しました！',
      onLast: true
    }));
}

/**
 * 独自fontをsrc配下に読み込む際の対応
 */
const font = () => {
  return gulp.src(srcPath.font)
    .pipe(gulp.dest(distPath.font))
    .pipe(gulp.dest(serverDistPath.font))
}

/**
 * html
 */
const html = () => {
  return gulp.src(srcPath.html)
    .pipe(gulp.dest(distPath.html))
}

/**
 * public
 */
const public_file = () => {
  return gulp.src(publicPath.public)
    .pipe(gulp.dest(distBase))
    .pipe(gulp.dest(serverBase))
}

/**
 * php
 */
const php = () => {
  return gulp.src(srcPath.php)
    .pipe(gulp.dest(distPath.php))
}

/**
 * ejs
 */
const ejsHTML = () => {
  //ここから追加
  const json_path = ejsData.data;
  const json = JSON.parse(fs.readFileSync(json_path));

  return gulp.src(srcPath.ejs)
    .pipe(
      //エラーが出ても処理を止めない
      plumber({
        errorHandler: notify.onError('Error:<%= error.message %>')
      }))
    .pipe(ejs({
      jsonData: json,
    }))
    .pipe(rename({
      extname: ".html"
    })) //拡張子をhtmlに
    .pipe(replace(/[\s\S]*?(<!DOCTYPE)/, "$1"))
    .pipe(gulp.dest(distPath.ejs))
    .pipe(browserSync.stream())
    .pipe(notify({
      message: 'HTMLをコンパイルしました！',
      onLast: true
    }));
}


/**
 * ローカルサーバー立ち上げ
 */
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
}

const browserSyncOption = {
  /**
   * MAMPなどを使う時はコメントアウトの方を使用
   */
  proxy: 'http://localhost:80', //環境によって変更する 80はMAMPのアドレスと同じにすること！
  // server: distBase
}

/**
 * リロード
 */
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
}

/**
 *
 * ファイル監視 ファイルの変更を検知したら、browserSyncReloadでreloadメソッドを呼び出す
 * series 順番に実行
 * watch('監視するファイル',処理)
 */
const watchFiles = () => {
  gulp.watch(srcPath.scss, gulp.series(cssSass))
  gulp.watch(srcPath.js, gulp.series(jsBundle, browserSyncReload))
  gulp.watch(srcPath.img, gulp.series(imgImagemin, browserSyncReload))
  gulp.watch(srcPath.svg, gulp.series(svg, browserSyncReload))
  gulp.watch(srcPath.font, gulp.series(font, browserSyncReload))
  gulp.watch(srcPath.html, gulp.series(html, browserSyncReload))
  gulp.watch(srcPath.php, gulp.series(php, browserSyncReload))
  gulp.watch(publicPath.public, gulp.series(public_file, browserSyncReload))
}

/**
 * seriesは「順番」に実行
 * parallelは並列で実行
 *
 * 一度cleanでdistフォルダ内を削除し、最新のものをdistする
 */
exports.default = gulp.series(
  clean,
  gulp.parallel(cssSass, jsBundle, imgImagemin, svg, font, html, php, public_file),
  gulp.parallel(watchFiles, browserSyncFunc)
);

exports.build = gulp.series(
  clean,
  gulp.parallel(cssSass, jsBundle, imgImagemin, svg, font, html, php, public_file),
);