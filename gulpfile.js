var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
    return gulp.src('wp-content/themes/rainsystem/scss/*.scss')
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest('wp-content/themes/rainsystem/'))
});