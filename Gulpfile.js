/*global -$ */
'use strict';
var gulp   = require('gulp'),
    del    = require('del'),
    concat = require('gulp-concat'),
    sass   = require('gulp-sass'),
    browserSync = require('browser-sync').create();




gulp.task('clean', function() {
  return del([
      'build/wp-content/themes/nango-master-portfolio/assets/styles/layout.css',
      'source/scss/scss-concatenated/layout.scss'
  ]);
});

gulp.task('concat-styles', function() {
  return gulp.src([
    'source/**/*.scss',    
  ])
    .pipe(concat('layout-concatenated.scss'))
    .pipe(gulp.dest('source/scss/scss-concatenated/'));
});

gulp.task('sass', function () {
    return gulp.src('source/scss/scss-concatenated/layout-concatenated.scss')
    .pipe(sass())
    .pipe(gulp.dest('build/wp-content/themes/nango-master-portfolio/assets/styles/')).pipe(browserSync.stream());
});






gulp.task('watcher', function () {
  gulp.watch( 'source/scss/scss-separated/scss-for-layout/**/*.scss', [ 'clean', 'concat-styles' ]);
  gulp.watch( 'source/scss/scss-separated/scss-for-frameworks/**/*.scss', [ 'clean', 'concat-styles' ]);
  gulp.watch( 'source/scss/scss-separated/scss-for-libs/**/*.scss', [ 'clean', 'concat-styles' ]);
  
  gulp.watch( 'source/scss/scss-concatenated/layout-concatenated.scss', [ 'sass' ]).on('change', browserSync.reload);
});


gulp.task('browserSync', function () {
  browserSync.init({
    browser: [ "firefox" ],
    proxy: "PHP/WP/nango__master-portfolio/build/"    
  })
});


gulp.task('default', ['browserSync', 'watcher']);


