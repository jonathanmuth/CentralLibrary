// include the required packages.
var gulp = require('gulp');
var watch = require('gulp-watch');
var connect = require('gulp-connect-php');
var wait = require('gulp-wait');
var open = require('gulp-open');
var uglify = require('gulp-uglify');
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

gulp.task('process-javascript', function () {
  gulp.src(['./assets/javascript/sorttable.js', './assets/javascript/velocity.js', './assets/javascript/velocity.ui.js', './assets/javascript/main.js'])
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/javascript/'))
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
  gulp.watch('./assets/javascript/*.js', ['process-javascript']);
  gulp.watch(['./*.php'], ['php']);
});

gulp.task('open', function(){
  var options = {
    url: 'http://127.0.0.1:8000',
    app: 'safari'
  };
  gulp.src('./index.php')
  .pipe(wait(1500))
  .pipe(open('', options));
});

// Default gulp task to run
gulp.task('default', ['watch', 'connect', 'open']);