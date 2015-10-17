var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

gulp.task('default', ['serve'], function() {
  return gulp.src('css/*.css')
  .pipe(concatCss("bundle.css"))
  .pipe(minifyCss({compatibility: 'ie8'}))
  .pipe(rename("bundle.min.css"))
  .pipe(gulp.dest('app/'));
});

gulp.task('serve', ['sass'], function() {

  

    browserSync.init({
          proxy: "mangodream"
    });

    gulp.watch("sass/*.sass", ['sass']);
    gulp.watch("*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("sass/*.sass")
        .pipe(sass())
        .pipe(gulp.dest("css"))
        .pipe(browserSync.stream());
});

//gulp.task('default', ['serve']);

gulp.task('watch', function() {
  gulp.watch('css/*.css', '[default]')
});
