var which = require('which');
var del = require('del');

// Gulp sketch-favicon task
// `gulp sketch-favicon` - Exports favicon sketch files to PNG files
module.exports = function ($, gulp, manifest) {
    return function () {

        var functions   = require('../functions/functions');
        var path        = manifest.paths;
        var globs       = manifest.globs;

        // This task needs sketchtool
        // Please download and install
        // http://bohemiancoding.com/sketch/tool/
        // For installation manual
        // https://news.layervault.com/stories/21828-sketchtool--a-commandline-app-for-exporting-pages-and-slices-out-of-sketch-docs
        try {
            which.sync('sketchtool');
        } catch(error){
            $.util.log("Sketchtool not found. Please install sketchtool. See http://bohemiancoding.com/sketch/tool/"); return;
        }

        // Clean favicon directory
        // This task is not part of a bigger sequence so folder needs to be cleaned manually
        del([path.dist + 'favicons'])

        // Run sketch task
        gulp.src(path.source + 'favicons/favicons.sketch')

            // Export Sketch artboards to PNG files
            .pipe( $.sketch({
                export: 'artboards',
                formats: 'png'
            }))

            // Optimize images and SVG files
            .pipe($.imagemin({
                progressive: true,
                interlaced: true
            }))

            .pipe(gulp.dest(path.dist + 'favicons'));

    };
};
