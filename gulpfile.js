var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    gls = require('gulp-live-server'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish');


gulp.task('default', ['sass', 'js', 'concat', 'watch']);

gulp.task('sass', function () {
    return gulp.src('resource/sass/app.scss')
        .pipe(concat('app.min.css'))
        // .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('assets/_css'));
});

gulp.task('concat', function () {
    return gulp.src('node_modules/bootstrap/dist/css/bootstrap.css')
        .pipe(concat('vendor.css'))
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('assets/_css'))
});

gulp.task('copy', function () {
    return gulp.src('node_modules/bootstrap/fonts/**')
        .pipe(gulp.dest('assets/fonts'))
});


gulp.task('js', function () {
    return gulp.src('resource/js/**/*.js')
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/_js'));
});

gulp.task('watch', function () {
    gulp.watch('resource/sass/**/*.scss', ['sass']);
    gulp.watch('resource/js/**/*.js', ['js']);
});

gulp.task('serve', function () {
    var server = gls.static('./', 8000);
    server.start();
    gulp.watch('assets/css/**/*.css', function (file) {
        gls.notify.apply(server, [file]);
    });
    gulp.watch('assets/js/**/*.js', function (file) {
        gls.notify.apply(server, [file]);
    });

});

gulp.task('lint', function () {
    return gulp.src('assets/src/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter(stylish));
});