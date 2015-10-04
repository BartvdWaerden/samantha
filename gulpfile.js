/**
 * Load required plugins
 *
 */

var $           = require('gulp-load-plugins')(); // Load all gulp plugins automatically
var argv        = require('minimist')(process.argv.slice(2));
var gulp        = require('gulp');

/**
 * Define variables
 */

// Use a project based manifest file for asset pipeline
// See https://github.com/austinpray/asset-builder
var manifest    = require('asset-builder')('./source/manifest.json');
var path        = manifest.paths; // `path` - Paths to base asset directories.
var config      = manifest.config || {}; // `config` - Store arbitrary configuration values here.
var globs       = manifest.globs; // `globs` - Array of assets path globs
var project     = manifest.getProjectGlobs(); // `project` - paths to first-party assets.

// Options for CLI flags
var settings = {
    rev: argv.production, // Enable static asset revisioning when `--production`
    customModernizr: argv.production, // Enable custom modernirz build when `--production`
    maps: !argv.production, // Disable source maps when `--production`
    failScsslint: argv.production, // Fail on scss lint errors `--production`
    failJshint: argv.production, // Fail on scss lint errors `--production`
    failStyleTask: argv.production // Fail styles task on error when `--production`
}

/**
 * Import helper tasks
 */

gulp.task('scripts', require('./gulp/helper-tasks/scripts')($, gulp, manifest, settings));
gulp.task('jshint', require('./gulp/helper-tasks/jshint')($, gulp, manifest, settings));
gulp.task('styles', require('./gulp/helper-tasks/styles')($, gulp, manifest, settings));
gulp.task('scsslint', require('./gulp/helper-tasks/scsslint')($, gulp, manifest, settings));
gulp.task('images', require('./gulp/helper-tasks/images')($, gulp, manifest));
gulp.task('svg2png', require('./gulp/helper-tasks/svg2png')($, gulp, manifest));
gulp.task('sketch-favicon', require('./gulp/helper-tasks/sketch-favicon')($, gulp, manifest));
gulp.task('sketch', require('./gulp/helper-tasks/sketch')($, gulp, manifest));
gulp.task('todo', require('./gulp/helper-tasks/todo')($, gulp, manifest));
gulp.task('modernizr', require('./gulp/helper-tasks/modernizr')($, gulp, manifest, settings));
gulp.task('fonts', require('./gulp/helper-tasks/fonts')($, gulp, manifest, settings));
gulp.task('clean', require('del').bind(null, [path.dist]));

/**
 * Import main tasks
 */

// `gulp watch` - Use BrowserSync to proxy your dev server and synchronize code
// Generally you should be running `gulp` instead of `gulp watch`.
gulp.task('watch', require('./gulp/main-tasks/watch')($, gulp, manifest));

// Build task
// `gulp build` - Run all the build tasks but don't clean up beforehand.
// `gulp build --production` - To compile for production run
gulp.task('build', require('./gulp/main-tasks/build')());

// Gulp default task
// `gulp` - Run a complete build and start watch task.
gulp.task('default', ['build'], function() { gulp.start('watch'); });
