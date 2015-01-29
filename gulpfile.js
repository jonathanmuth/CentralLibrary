// include the required packages.
var gulp = require('gulp');
var watch = require('gulp-watch');
var connect = require('gulp-connect-php');
var concat = require('gulp-concat');
var stylus = require('gulp-stylus');
var autoprefixer = require('gulp-autoprefixer');
var nib = require('nib');

// Get one .styl file and render
gulp.task('process-stylus', function () {
  gulp.src('./assets/stylus/all.styl')
    .pipe(stylus())
    .pipe(concat('main.css'))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
   }))
    .pipe(gulp.dest('./assets/css/'));
});

// Start the server

gulp.task('connect', function() {
    connect.server();
});

// Reload php files through connect

gulp.task('php', function(){
  gulp.src('./*.php')
    .pipe(connect.reload());
});

gulp.task('watch', function() {
  gulp.watch('./assets/stylus/**/*.styl', ['process-stylus']);
  gulp.watch(['./*.php'], ['php']);
});

// Default gulp task to run
gulp.task('default', ['watch', 'connect']);