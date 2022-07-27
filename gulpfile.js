var gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    cssmin = require('gulp-cssnano'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    prefixerOptions = {
        overrideBrowserslist: ['last 2 versions']
    }

sass.compiler = require('node-sass');

gulp.task('giulia', function () {
    return gulp.src('src/sass/giulia-child.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(prefixerOptions))
        .pipe(cssmin({zindex: false}))
        .pipe(sourcemaps.write('.', undefined))
        .pipe(gulp.dest('assets/css/'))
});
