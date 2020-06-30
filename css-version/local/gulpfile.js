'use strict';

// Plugins ----------------------------------------------------------------------
let gulp = require('gulp'),
    livereload = require('gulp-livereload');


// template ---------------------------------------------------------------------
gulp.task('php', function template() {
    return gulp.src('templates/**/*.php')
    .pipe(livereload({ start: true }));
});


// style ------------------------------------------------------------------------
gulp.task('css', function style() {
    return gulp.src('assets/css/*.css')
    .pipe(livereload({ start: true }));
});


// javascript -------------------------------------------------------------------
gulp.task('js', function javascript() {
    return gulp.src('assets/js/*.js')
    .pipe(livereload({ start: true }));
});


// default ----------------------------------------------------------------------
gulp.task('default', function Default() {
    livereload.listen();
    gulp.watch('assets/css/*.css', gulp.series('css'));
    gulp.watch('assets/js/*.js', gulp.series('js'));
    gulp.watch('templates/**/*.*', gulp.series('php'));
});
