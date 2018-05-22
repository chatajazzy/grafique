const babel         = require('gulp-babel'),
      browserSync   = require('browser-sync').create(),
      concat        = require('gulp-concat'),
      corejsBuilder = require('core-js-builder'),
      envPreset     = require('babel-preset-env'),
      eslint        = require('gulp-eslint'),
      fs            = require('fs'),
      gulp          = require('gulp'),
      gulpif        = require('gulp-if'),
      gutil         = require('gulp-util'),
      logger        = require('gulp-logger'),
      notify        = require("gulp-notify"),
      plumber       = require('gulp-plumber'),
      postcss       = require('gulp-postcss'),
      reload        = browserSync.reload,
      reporter      = require('postcss-reporter'),
      runSequence   = require('run-sequence'),
      sass          = require('gulp-sass'),
      sassLint      = require('gulp-sass-lint'),
      sourcemaps    = require('gulp-sourcemaps'),
      stylelint     = require('stylelint'),
      uglify        = require('gulp-uglify');

// PostCSS Plugins
const autoprefixer = require('autoprefixer'),
      cssnano      = require('cssnano');

// PostCSS Processors Config
const processors = [
  autoprefixer()
];

const paths = {
  template: '../*.html',
  sass: '../wp-content/themes/grafique/scss',
  css: '../wp-content/themes/grafique/css',
};


/**
 * Helpers
 */

function developmentStylesHelper(src, dest) {
  return gulp.src(src)
    .pipe(gulpif(
      !gutil.env.ci,
      plumber({
        errorHandler: notify.onError('Error: <%= error.message %>')
      })
    ))
    .pipe(gulpif(!gutil.env.disableMaps, sourcemaps.init()))
    .pipe(sass())
    .pipe(postcss(processors))
    .pipe(gulpif(!gutil.env.disableMaps, sourcemaps.write()))
    .pipe(gulp.dest(dest))
    .pipe(browserSync.stream())
    .pipe(logger({
      display: 'name'
    }));
}

function productionStylesHelper(src, dest) {
  return gulp.src(src)
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(postcss(processors))
    .pipe(postcss([cssnano()]))
    .pipe(gulp.dest(dest));
}

function cssLintHelper(src) {
  return gulp.src(src)
    .pipe(gulpif(
      !gutil.env.ci,
      plumber({
        errorHandler: notify.onError('Error: <%= error.message %>')
      })
    ))
    .pipe(postcss([
      stylelint(),
      reporter({
        clearMessages: true,
        throwError: gutil.env.ci || false
      })
    ]))
    .pipe(logger({
      display: 'name'
    }));
}

function sassLintHelper(src) {
  return gulp.src(src)
    .pipe(gulpif(
      !gutil.env.ci,
      plumber({
        errorHandler: notify.onError('Error: <%= error.message %>')
      })
    ))
    .pipe(sassLint())
    .pipe(sassLint.format())
    .pipe(gulpif(gutil.env.ci, sassLint.failOnError()))
    .pipe(logger({
      display: 'name'
    }));
}

/**
 * Gulp tasks
 */

gulp.task(
  'default',[
    'dev',
    'watch',
    'watch-sass-and-lint',
    'watch-css-and-lint'
  ]
);

// browser sync
gulp.task('dev', () => {
  browserSync.init({
    proxy: "grafique.test",
    rewriteRules: [{
      match: /="\/\//g,
      fn: () => '="http://'
    }]
  });
});

// watch tasks
gulp.task('watch', () => {
  gulp.watch(paths.sass + '/**', ['sass', 'styles', browserSync.reload]);
  gulp.watch(paths.template, browserSync.reload);

});

// compile regular SASS (used for development)
gulp.task('sass', () => {
  return developmentStylesHelper(
    [
      paths.sass + '/*.scss',
      '!' + paths.sass + '/styles.scss'
    ],
    paths.css
  );
});

// Compile and build styles (used for production)
gulp.task('styles', () => {
  return productionStylesHelper(paths.sass + '/*.scss', paths.css);
});

// watch and lint sass files
gulp.task('watch-sass-and-lint', () => {
  gulp.watch([
    paths.sass + '/**/*.scss'
  ], event => {
    sassLintHelper(event.path);
  });
});

// lint sass files
gulp.task('sass-lint', () => {
  return sassLintHelper([
    paths.sass + '/**/*.scss'
  ]);
});

// watch and lint css files
gulp.task('watch-css-and-lint', () => {
  gulp.watch([
    paths.css + '/*.css'
  ], event => {
    cssLintHelper(event.path);
  });
});

// lint css files
gulp.task('css-lint', () => {
  return cssLintHelper([
    paths.css + '/*.css',
    '!../**/styles.css'
  ]);
});

// bulid release
gulp.task('release', resolve => {
  return runSequence(
    'styles',
    () => {
      resolve();
    }
  );
});
