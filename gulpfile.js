import gulp from 'gulp';
import sass from 'gulp-sass';
import dartSass from 'sass';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import cleanCSS from 'gulp-clean-css';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'gulp-autoprefixer';

const sassCompiler = sass(dartSass);

const paths = {
  scss: './src/scss/**/*.scss',
  js: './src/js/**/*.js',
  cssOutput: './dist/css',
  jsOutput: './dist/js'
};

function styles() {
  return gulp.src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sassCompiler().on('error', sassCompiler.logError))
    .pipe(autoprefixer())
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.cssOutput));
}

function scripts() {
  return gulp.src(paths.js)
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(paths.jsOutput));
}

function watchFiles() {
  gulp.watch(paths.scss, styles);
  gulp.watch(paths.js, scripts);
}

export const watch = gulp.series(styles, scripts, watchFiles);
