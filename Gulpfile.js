/*global -$ */
'use strict';
var gulp   = require('gulp'),
    del    = require('del'),
    concat = require('gulp-concat'),
    sass   = require('gulp-sass'),
    browserSync = require('browser-sync').create();




gulp.task('clean', function() {
  return del([
      'build/wp-content/themes/nango-company/sources/theme/styles/styles.css',
      'source/styles/styles/styles.scss'
  ]);
});

gulp.task('concat-styles', function() {
  return gulp.src([
    'source/styles/variables.scss',
    'source/styles/mixins.scss',


    'source/styles/vendor/**/*.scss',     

      
    'source/styles/theme/normalize.scss',
      
    'source/styles/theme/fonts.scss',


    'source/styles/theme/components/mixins/**/*.scss',

    'source/styles/theme/components/*.scss',
      
    'source/styles/theme/templates/**/*.scss'
  ])
    .pipe(concat('styles.scss'))
    .pipe(gulp.dest('source/styles/styles/'));
});

gulp.task('sass', function () {
    return gulp.src('source/styles/styles/styles.scss')
    .pipe(sass())
    .pipe(gulp.dest('build/wp-content/themes/nango-company/sources/theme/styles/')).pipe(browserSync.stream());
});






gulp.task('watcher', function () {
  gulp.watch( 'source/styles/theme/**/*.scss',  [ 'clean', 'concat-styles' ]);
  gulp.watch( 'source/styles/vendor/**/*.scss', [ 'clean', 'concat-styles' ]);

  gulp.watch( 'source/styles/styles/styles.scss', [ 'sass' ]).on('change', browserSync.reload);
});


gulp.task('browserSync', function () {
  browserSync.init({
    browser: [ "firefox" ],
    proxy: "PHP/WP/theme-Nango--company/build/"
  })
});


gulp.task('default', ['browserSync', 'watcher']);


