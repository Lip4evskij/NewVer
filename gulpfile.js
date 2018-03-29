var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    uglifycss = require('gulp-uglifycss'),
    sass = require('gulp-sass');

// Компилируем SASS
gulp.task('sass', function () {
    return gulp.src([
        'resources/assets/sass/main_styles.scss'
    ])
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('public/css/'))
});

// Объединяем все CSS
gulp.task('css', function () {
    gulp.src([
        'resources/assets/css/bootstrap-grid.css',
        'resources/assets/css/normalize.css',
        'public/css/main_styles.css'
    ])
        .pipe(concat('styles.min.css'))
        .pipe(uglifycss())
        .pipe(gulp.dest('public/css/'));
});

// Объединяем и сжимаем JS
gulp.task('js-main', function () {
    return gulp.src('wp-content/themes/theme/js/scripts.js')
        .pipe(uglify())
        .pipe(concat('scripts.min.js'))
        .pipe(gulp.dest('wp-content/themes/theme/js/'));
});

// Проверяем обновления в файлах
gulp.task('watch', function () {
    gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
    gulp.watch('public/css/**/*.css', ['css']);
});
