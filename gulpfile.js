var gulp   = require('gulp'),
<<<<<<< HEAD
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	concat = require('gulp-concat'),
	browserSync = require('browser-sync'),
	reload = browserSync.reload;

gulp.task('bs', function(){
	browserSync.init({
		proxy:'http://localhost/mySpecialDay/'
	});
});


=======
		sass = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat'),
		browsersync = require('browser-sync'),
		reload = browsersync.reload;

gulp.task('bs', function() {
	browsersync.init({
		proxy: 'http://localhost:8888/mySpecialDay/'
	});
});

>>>>>>> 7d081e1c0d0a599167548fd819033e5db2afe346
gulp.task('default', ['bs', 'styles', 'watch']);

gulp.task('styles', function() {
	return gulp.src('sass/**/*.scss')
		.pipe(sass({
			'sourcemap=none': true,
			errLogToConsole: true
		}))
		.pipe(concat('style.css'))
		.pipe(gulp.dest('.'))
<<<<<<< HEAD
		.pipe(reload({stream:true}));
=======
		.pipe(reload({stream: true}));
>>>>>>> 7d081e1c0d0a599167548fd819033e5db2afe346
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	gulp.watch('sass/**/*.scss', ['styles']);
<<<<<<< HEAD
	gulp.watch('**/*.php',reload);
=======
	gulp.watch('**/*.php', reload);
>>>>>>> 7d081e1c0d0a599167548fd819033e5db2afe346
});