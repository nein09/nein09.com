'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var connect = require('gulp-connect');

gulp.task('babel', function() {
  return gulp.src('src/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: ['es2015']
    }))
    .pipe(concat('all.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('dist'));
});

gulp.task('sass', function () {
  return gulp.src('sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css'));
});

gulp.task('connect', function() {
  connect.server({
    root: 'app',
    livereload: true,
    directoryListing: false,
    open: true
  });
});

gulp.task('default', function() {
  gulp.watch('sass/**/*.scss', gulp.series('sass'));
  gulp.watch('src/**/*.js', gulp.series('babel'));
  gulp.src('.').pipe(connect.reload());
});
