// Load required plugins
var merge       = require('merge-stream');
var lazypipe    = require('lazypipe');
var cache       = require('gulp-cached');

// Gulp Styles task
// `gulp styles` - Parse and combina all SCSS files, combine MQ, uglify
module.exports = function ($, gulp, manifest, settings) {
    return function () {

        var path        = manifest.paths;
        var config      = manifest.config || {};
        var globs       = manifest.globs;
        var project     = manifest.getProjectGlobs();

        // Load main helper functions
        var helpers     = require('../functions/functions');

        // Merge all CSS dependencies
        var merged = merge();
        manifest.forEachDependency('css', function(dep) {
            merged.add(
                gulp.src(dep.globs, {base: 'styles'})

                    // Run styles lazypipe tasks
                    .pipe(cssTasks(dep.name, settings, $, config))
            );
        });

        // Return and write to manifest
        return merged
            .pipe(helpers.writeToManifest('styles'));

    };
};

// CSS processing pipeline
var cssTasks = function(filename, settings, $, config) {

    return lazypipe()

    // Fail when failStyleTask is enabled
    .pipe(function() {
      return $.if(!settings.failStyleTask, $.plumber());
    })

    // Prepare sourcemaps files when maps is settings
    .pipe(function() {
        return $.if(settings.maps, $.sourcemaps.init());
    })


    // @TODO check if we can load or libsass or node sass based on manifest setting
    .pipe(function() {
        return $.if('*.scss', $.sass({
            outputStyle: 'nested', // libsass doesn't support expanded yet
            precision: 10,
            includePaths: ['.'],
            errLogToConsole: !settings.failStyleTask
        }));
    })

    // Concat style files
    .pipe($.concat, filename)

    // Autoprefix style files
    .pipe($.autoprefixer, {
        browsers: config.supportedBrowsers || [ "last 2 versions" ]
    })

    // Combine media queries
    .pipe($.combineMq)

    // Minify style files
    // @TODO banchmark minifyCss v.s. CSSO on bigger scale
    //.pipe($.minifyCss)
    .pipe($.csso)

    // Use style revisions (if --production)
    .pipe(function() {
        return $.if(settings.rev, $.rev());
    })

    // Use sourcemaps files (if not --production)
    .pipe(function() {
        return $.if(settings.maps, $.sourcemaps.write('.'));
    })();

};
