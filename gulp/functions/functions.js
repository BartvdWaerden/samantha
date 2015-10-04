var $           = require('gulp-load-plugins')(); // Load all gulp plugins automatically
var gulp        = require('gulp');
var lazypipe    = require('lazypipe');
var browserSync = require('browser-sync');

// Load project manifest
var manifest    = require('asset-builder')('./source/manifest.json');
var path        = manifest.paths;
var config      = manifest.config || {};

// Path to the compiled assets manifest in the dist directory (assets)
var revManifest = path.dist + 'assets-revisions.json';

module.exports = {

    // Custom utility reporter for SCSS lint
    // See https://github.com/gulpjs/gulp-util
    gulpReporter : function(file) {

        if( !file.scsslint.success ) {

            $.util.log( $.util.colors.cyan(file.scsslint.results.length) + ' issues found in ' + $.util.colors.magenta(file.relative));

            file.scsslint.results.forEach(function (issue) {

                var severity    = issue.severity === 'warning' ? $.util.colors.yellow(' [W] ') : $.util.colors.red(' [E] ');
                var linter      = issue.linter ? (issue.linter + ': ') : ''
                var logMsg      = $.util.colors.cyan(file.relative) + ':' + $.util.colors.magenta(issue.line) + severity + $.util.colors.green(linter) + issue.reason;

                $.util.log(logMsg);

            });
        }
    },

    // Create a notification
    // This runs a notification with Gulp notification plugin
    gulpNotification : function(message) {
        return $.notify({
            title: config.title || 'Rokit',
            message: message,
            // @TODO load project favicon as notificaion image
            // icon: 'dandelion.gif',
            icon: false,
            contentImage: false,
            sound: false,
            wait: false,
            onLast: true
        });
    },

    // Handle the gulp errors (needed to stop gulp from breaking)
    // See http://stackoverflow.com/a/24889189
    gulpErrorHandler : function(error) {
        console.log(error.toString());
        this.emit('end');
    },

    // Write to rev manifest
    // If there are any revved files then write them to the rev manifest.
    // See https://github.com/sindresorhus/gulp-rev
    writeToManifest : function(directory) {

        var notify = this.gulpNotification;

        return lazypipe()

            .pipe(gulp.dest, path.dist + directory)
            .pipe(function() {
                return $.if('**/*.{js,css}', browserSync.reload({stream:true}));
            })

            // Notifications
            // @TODO: If/when gulp-rev supports streaming, add it after that. Or use gulp-buffer (?)
            .pipe(function() {
                return $.if('**/*.js', notify('Finished compiling scripts'));
            })
            .pipe(function() {
                return $.if('**/*.css', notify('Finished compiling styles'));
            })

            .pipe($.rev.manifest, revManifest, {
                base: path.dist,
                merge: true
            })

            .pipe(gulp.dest, path.dist)();
    }
};
