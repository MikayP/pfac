const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const imagemin = require('gulp-imagemin');
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const sourcemaps = require('gulp-sourcemaps');
const { src, series, parallel, dest, watch } = require('gulp');

const mainDir = 'src';
const mainStyle = 'src/scss/style.scss';
const jsPath = 'src/js/**/*.js';
const imgPath = 'src/images/*';

// function copyHtml() {
//   return src('src/*.html').pipe(gulp.dest('./'));
// }

// function copyPHP(){
//     return src('./src/*.php').pipe(gulp.dest('./'));
// }

// function imgTask() {
//   return src('src/images/*').pipe(imagemin()).pipe(gulp.dest('./images'));
// }

function jsTask() {
  return src(jsPath)
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(terser())
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./js'));
}

function cssTask() {
  return src(mainStyle)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([ autoprefixer(), cssnano() ]))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./'));
}

function watchTask() {
  watch([mainStyle, jsPath, mainDir, imgPath], { interval: 1000 }, parallel(cssTask, jsTask));
}

exports.cssTask = cssTask;
exports.jsTask = jsTask;

exports.default = series(
  parallel(jsTask, cssTask),
  watchTask
);