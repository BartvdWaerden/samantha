// Load required plugins
var merge       = require('merge-stream');
var lazypipe    = require('lazypipe');
var cache       = require('gulp-cached');

// Gulp Scripts task
// `gulp scripts` - Runs JSHint then compiles, combines, and optimizes Bower JS and project JS.
module.exports = function ($, gulp, manifest, settings) {
    return function () {

        var path        = manifest.paths;
        var config      = manifest.config || {};
        var globs       = manifest.globs;
        var project     = manifest.getProjectGlobs();

        // Load main helper functions
        var helpers     = require('../functions/functions');

        // Merge all JS dependencies
        var merged = merge();
        manifest.forEachDependency('js', function(dep) {
            merged.add(
                gulp.src(dep.globs, {base: 'scripts'})

                // Run scripts lazypipe tasks
                .pipe(jsTasks(dep.name, settings, $, config))
            );
        });

        // Return and write to manifest
        return merged
            .pipe(helpers.writeToManifest('scripts'));

    };
};

// JS processing pipeline
var jsTasks = function(filename, settings, $, config) {
    return lazypipe()

    .pipe(function() {
        return $.if(settings.maps, $.sourcemaps.init());
    })

    .pipe($.concat, filename)
    .pipe($.uglify)

    .pipe(function() {
        return $.if(settings.rev, $.rev());
    })

    .pipe(function() {
        return $.if(settings.maps, $.sourcemaps.write('.'));
    })();
};
