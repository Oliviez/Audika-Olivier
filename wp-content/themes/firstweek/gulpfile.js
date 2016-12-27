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
   //   'js/pdb-video-canvas.js',

       'js/scrollmagic/ScrollMagic.min.js',
       'js/scrollmagic/plugins/animation.gsap.min.js',
       'js/scrollmagic/plugins/jquery.ScrollMagic.min.js',
       'js/scrollmagic/plugins/debug.addIndicators.min.js',
       'js/TweenMax.min.js',
       // 'js/ScrollToPlugin.min.js',
       'js/pdb-init.js',
       // 'js/pdb-video-blur.js',
       'js/pdb-video-background.js',
       'js/pdb-add-menu-img.js',
       'js/pdb-open-menu.js',
       'js/pdb-scroll-to.js',
       'js/pdb-show.js',
       'js/pdb-carousels.js',
       // 'js/pdb-parallax.js',
       'js/pdb-box.js',
       'js/pdb-tabs.js',
       'js/pdb-active-on-scroll.js',
       'js/pdb-numeric-input.js',
       'js/pdb-hover-spaces.js',
       'js/pdb-landing-parallax.js',
       // 'js/pdb-landing.js',
       'js/pdb-fixed-nav.js',
       'js/pdb-img-stack.js',
       'js/pdb-progress.js',
       'js/pdb-dropdown.js',
   ])
   .pipe(sourcemaps.init())
   .pipe(concat('pdb.js'))
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
