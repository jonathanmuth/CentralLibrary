// Include the required packages.
var gulp = require('gulp');
var watch = require('gulp-watch');
var connect = require('gulp-connect-php');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var stylus = require('gulp-stylus');
var autoprefixer = require('gulp-autoprefixer');
var gutil = require( 'gulp-util' );
var ftp = require( 'vinyl-ftp' );
var nib = require('nib');
var browserSync = require('browser-sync').create();

// Get one .styl file and render
gulp.task('process-stylus', function () {
  gulp.src('./assets/stylus/all.styl')
    .pipe(stylus())
    .pipe(concat('main.css'))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
   }))
    .pipe(gulp.dest('./assets/css/'))
    .pipe(browserSync.stream());
});

// Process JavaScript and stream changes to browser

gulp.task('process-javascript', function () {
  gulp.src(['./assets/javascript/sorttable.js', './assets/javascript/velocity.js', './assets/javascript/velocity.ui.js', './assets/javascript/main.js'])
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/javascript/'))
    .pipe(browserSync.stream());
});


// Reload site when a .php file changes
gulp.task('php', function(){
  gulp.src('**/*.php')
    .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch('./assets/stylus/**/*.styl', ['process-stylus']);
  gulp.watch('./assets/javascript/*.js', ['process-javascript']);
  gulp.watch('**/*.php', ['php']);
});

// Start the server
gulp.task('connect', function() {
    connect.server();
});

// Open the site with BrowserSync enabled
gulp.task('open', function(){
  browserSync.init({
      proxy: "http://127.0.0.1:8000",
      notify: false
  });
});

// Default gulp task to run
gulp.task('default', ['watch', 'connect', 'open']);

// Deploy the site through FTP to a given webserver
gulp.task( 'deploy', function() {

    var conn = ftp.create( {
        host:     'w00f47ef.kasserver.com',
        user:     'f00af6f7',
        password: 'JhdMpCkmVBw86x3k',
        parallel: 10,
        log: gutil.log
    } );

    var globs = [
        'assets/**',
        'content/**',
        'kirby/**',
        'panel/**',
        'site/**',
        'index.php',
        '.htaccess'
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src( globs, { base: '.', buffer: false } )
        .pipe( conn.newer( '' ) ) // only upload newer files
        .pipe( conn.dest( '' ) );

} );