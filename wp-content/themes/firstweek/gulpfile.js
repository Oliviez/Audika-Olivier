var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var notify = require("gulp-notify");
var postcss = require("gulp-postcss");
var autoprefixer = require('autoprefixer');
var livereload = require('gulp-livereload');

gulp.task('styles', function() {
 return gulp.src('scss/*.scss')
   .pipe(sourcemaps.init())
   .pipe(sass({
       outputStyle: 'compressed'
   }).on('error', sass.logError))
   .pipe(postcss([ autoprefixer({ browsers: ['last 2 versions'] }) ]))
   .pipe(sourcemaps.write("./"))
   .pipe(gulp.dest('./'))
   .pipe(notify("CSS generated"))
   .pipe(livereload());
});

gulp.task('scripts', function() {
 return gulp.src([
      'js/fw.js',
   ])
   .pipe(sourcemaps.init())
   .pipe(concat('fw.js'))
   .pipe(gulp.dest('dist'))
   .pipe(uglify())
   .pipe(rename({ extname: '.min.js' }))
   .pipe(sourcemaps.write("./"))
   .pipe(gulp.dest('dist'))
   .on('error', sass.logError)
   .pipe(notify("JS generated"))
   .pipe(livereload());
});

gulp.task('watch', function() {
   livereload.listen();
   gulp.watch('scss/**', ['styles']);
   gulp.watch('js/**', ['scripts']);
});

gulp.task('default', ['watch']);
