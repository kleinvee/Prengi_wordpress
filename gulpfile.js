const gulp   = require('gulp');
const sass   = require('gulp-sass');
const rename = require("gulp-rename");


gulp.task('styles', function() {
    return gulp.src("sass/**/*.+(scss|sass)")
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(rename({suffix: '.min', prefix: ''}))
        .pipe(gulp.dest("css"))
});

gulp.task('watch', function() {
    gulp.watch("sass/**/*.+(scss|sass|css)", gulp.parallel('styles'));
});


gulp.task('default', gulp.parallel('watch', 'styles'));